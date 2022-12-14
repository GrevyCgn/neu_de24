<?php

namespace Laminas\Feed\Writer;

use BadMethodCallException;
use DateTime;
use DateTimeInterface;
use Laminas\Feed\Uri;

use function array_key_exists;
use function get_class;
use function gettype;
use function in_array;
use function is_int;
use function is_numeric;
use function is_object;
use function is_string;
use function sprintf;

class Entry
{
    /**
     * Internal array containing all data associated with this entry or item.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Registered extensions
     *
     * @var array
     */
    protected $extensions = [];

    /**
     * Holds the value "atom" or "rss" depending on the feed type set when
     * when last exported.
     *
     * @var string
     */
    protected $type;

    /**
     * Constructor: Primarily triggers the registration of core extensions and
     * loads those appropriate to this data container.
     */
    public function __construct()
    {
        Writer::registerCoreExtensions();
        $this->_loadExtensions();
    }

    /**
     * Set a single author
     *
     * The following option keys are supported:
     * 'name'  => (string) The name
     * 'email' => (string) An optional email
     * 'uri'   => (string) An optional and valid URI
     *
     * @return $this
     * @throws Exception\InvalidArgumentException If any value of $author not follow the format.
     */
    public function addAuthor(array $author)
    {
        // Check array values
        if (
            ! array_key_exists('name', $author)
            || empty($author['name'])
            || ! is_string($author['name'])
        ) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: author array must include a "name" key with a non-empty string value'
            );
        }

        if (isset($author['email'])) {
            if (empty($author['email']) || ! is_string($author['email'])) {
                throw new Exception\InvalidArgumentException(
                    'Invalid parameter: "email" array value must be a non-empty string'
                );
            }
        }
        if (isset($author['uri'])) {
            if (
                empty($author['uri']) || ! is_string($author['uri'])
                || ! Uri::factory($author['uri'])->isValid()
            ) {
                throw new Exception\InvalidArgumentException(
                    'Invalid parameter: "uri" array value must be a non-empty string and valid URI/IRI'
                );
            }
        }

        $this->data['authors'][] = $author;

        return $this;
    }

    /**
     * Set an array with feed authors
     *
     * @see addAuthor
     *
     * @return $this
     */
    public function addAuthors(array $authors)
    {
        foreach ($authors as $author) {
            $this->addAuthor($author);
        }

        return $this;
    }

    /**
     * Set the feed character encoding
     *
     * @param  string $encoding
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setEncoding($encoding)
    {
        if (empty($encoding) || ! is_string($encoding)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['encoding'] = $encoding;

        return $this;
    }

    /**
     * Get the feed character encoding
     *
     * @return null|string
     */
    public function getEncoding()
    {
        if (! array_key_exists('encoding', $this->data)) {
            return 'UTF-8';
        }
        return $this->data['encoding'];
    }

    /**
     * Set the copyright entry
     *
     * @param  string $copyright
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setCopyright($copyright)
    {
        if (empty($copyright) || ! is_string($copyright)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['copyright'] = $copyright;

        return $this;
    }

    /**
     * Set the entry's content
     *
     * @param  string $content
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setContent($content)
    {
        if (empty($content) || ! is_string($content)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['content'] = $content;

        return $this;
    }

    /**
     * Set the feed creation date
     *
     * @param  null|int|DateTimeInterface $date
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setDateCreated($date = null)
    {
        if ($date === null) {
            $date = new DateTime();
        }
        if (is_int($date)) {
            $date = new DateTime('@' . $date);
        }
        if (! $date instanceof DateTimeInterface) {
            throw new Exception\InvalidArgumentException(
                'Invalid DateTime object or UNIX Timestamp passed as parameter'
            );
        }
        $this->data['dateCreated'] = $date;

        return $this;
    }

    /**
     * Set the feed modification date
     *
     * @param  null|int|DateTimeInterface $date
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setDateModified($date = null)
    {
        if ($date === null) {
            $date = new DateTime();
        }
        if (is_int($date)) {
            $date = new DateTime('@' . $date);
        }
        if (! $date instanceof DateTimeInterface) {
            throw new Exception\InvalidArgumentException(
                'Invalid DateTime object or UNIX Timestamp passed as parameter'
            );
        }
        $this->data['dateModified'] = $date;

        return $this;
    }

    /**
     * Set the feed description
     *
     * @param  string $description
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setDescription($description)
    {
        if (empty($description) || ! is_string($description)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['description'] = $description;

        return $this;
    }

    /**
     * Set the feed ID
     *
     * @param  string $id
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setId($id)
    {
        if (empty($id) || ! is_string($id)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['id'] = $id;

        return $this;
    }

    /**
     * Set a link to the HTML source of this entry
     *
     * @param  string $link
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setLink($link)
    {
        if (empty($link) || ! is_string($link) || ! Uri::factory($link)->isValid()) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: parameter must be a non-empty string and valid URI/IRI'
            );
        }
        $this->data['link'] = $link;

        return $this;
    }

    /**
     * Set the number of comments associated with this entry
     *
     * @param  int|float|string $count
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setCommentCount($count)
    {
        // phpcs:ignore SlevomatCodingStandard.Operators.DisallowEqualOperators.DisallowedNotEqualOperator
        if (! is_numeric($count) || (int) $count != $count || (int) $count < 0) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: "count" must be a positive integer number or zero'
            );
        }
        $this->data['commentCount'] = (int) $count;

        return $this;
    }

    /**
     * Set a link to a HTML page containing comments associated with this entry
     *
     * @param  string $link
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setCommentLink($link)
    {
        if (empty($link) || ! is_string($link) || ! Uri::factory($link)->isValid()) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: "link" must be a non-empty string and valid URI/IRI'
            );
        }
        $this->data['commentLink'] = $link;

        return $this;
    }

    /**
     * Set a link to an XML feed for any comments associated with this entry
     *
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setCommentFeedLink(array $link)
    {
        if (! isset($link['uri']) || ! is_string($link['uri']) || ! Uri::factory($link['uri'])->isValid()) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: "link" must be a non-empty string and valid URI/IRI'
            );
        }
        if (! isset($link['type']) || ! in_array($link['type'], ['atom', 'rss', 'rdf'])) {
            throw new Exception\InvalidArgumentException(
                'Invalid parameter: "type" must be one of "atom", "rss" or "rdf"'
            );
        }
        if (! isset($this->data['commentFeedLinks'])) {
            $this->data['commentFeedLinks'] = [];
        }
        $this->data['commentFeedLinks'][] = $link;

        return $this;
    }

    /**
     * Set a links to an XML feed for any comments associated with this entry.
     * Each link is an array with keys "uri" and "type", where type is one of:
     * "atom", "rss" or "rdf".
     *
     * @return $this
     */
    public function setCommentFeedLinks(array $links)
    {
        foreach ($links as $link) {
            $this->setCommentFeedLink($link);
        }

        return $this;
    }

    /**
     * Set the feed title
     *
     * @param  string $title
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setTitle($title)
    {
        if ((empty($title) && ! is_numeric($title)) || ! is_string($title)) {
            throw new Exception\InvalidArgumentException('Invalid parameter: parameter must be a non-empty string');
        }
        $this->data['title'] = $title;

        return $this;
    }

    /**
     * Get an array with feed authors
     *
     * @return array
     */
    public function getAuthors()
    {
        if (! array_key_exists('authors', $this->data)) {
            return;
        }
        return $this->data['authors'];
    }

    /**
     * Get the entry content
     *
     * @return string
     */
    public function getContent()
    {
        if (! array_key_exists('content', $this->data)) {
            return;
        }
        return $this->data['content'];
    }

    /**
     * Get the entry copyright information
     *
     * @return string
     */
    public function getCopyright()
    {
        if (! array_key_exists('copyright', $this->data)) {
            return;
        }
        return $this->data['copyright'];
    }

    /**
     * Get the entry creation date
     *
     * @return string
     */
    public function getDateCreated()
    {
        if (! array_key_exists('dateCreated', $this->data)) {
            return;
        }
        return $this->data['dateCreated'];
    }

    /**
     * Get the entry modification date
     *
     * @return string
     */
    public function getDateModified()
    {
        if (! array_key_exists('dateModified', $this->data)) {
            return;
        }
        return $this->data['dateModified'];
    }

    /**
     * Get the entry description
     *
     * @return string
     */
    public function getDescription()
    {
        if (! array_key_exists('description', $this->data)) {
            return;
        }
        return $this->data['description'];
    }

    /**
     * Get the entry ID
     *
     * @return string
     */
    public function getId()
    {
        if (! array_key_exists('id', $this->data)) {
            return;
        }
        return $this->data['id'];
    }

    /**
     * Get a link to the HTML source
     *
     * @return null|string
     */
    public function getLink()
    {
        if (! array_key_exists('link', $this->data)) {
            return;
        }
        return $this->data['link'];
    }

    /**
     * Get all links
     *
     * @return array
     */
    public function getLinks()
    {
        if (! array_key_exists('links', $this->data)) {
            return;
        }
        return $this->data['links'];
    }

    /**
     * Get the entry title
     *
     * @return string
     */
    public function getTitle()
    {
        if (! array_key_exists('title', $this->data)) {
            return;
        }
        return $this->data['title'];
    }

    /**
     * Get the number of comments/replies for current entry
     *
     * @return int
     */
    public function getCommentCount()
    {
        if (! array_key_exists('commentCount', $this->data)) {
            return;
        }
        return $this->data['commentCount'];
    }

    /**
     * Returns a URI pointing to the HTML page where comments can be made on this entry
     *
     * @return string
     */
    public function getCommentLink()
    {
        if (! array_key_exists('commentLink', $this->data)) {
            return;
        }
        return $this->data['commentLink'];
    }

    /**
     * Returns an array of URIs pointing to a feed of all comments for this entry
     * where the array keys indicate the feed type (atom, rss or rdf).
     *
     * @return string
     */
    public function getCommentFeedLinks()
    {
        if (! array_key_exists('commentFeedLinks', $this->data)) {
            return;
        }
        return $this->data['commentFeedLinks'];
    }

    /**
     * Add an entry category
     *
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function addCategory(array $category)
    {
        if (! isset($category['term'])) {
            throw new Exception\InvalidArgumentException(
                'Each category must be an array and contain at least a "term" element'
                . ' containing the machine readable category name'
            );
        }
        if (isset($category['scheme'])) {
            if (
                empty($category['scheme'])
                || ! is_string($category['scheme'])
                || ! Uri::factory($category['scheme'])->isValid()
            ) {
                throw new Exception\InvalidArgumentException(
                    'The Atom scheme or RSS domain of a category must be a valid URI'
                );
            }
        }
        if (! isset($this->data['categories'])) {
            $this->data['categories'] = [];
        }
        $this->data['categories'][] = $category;

        return $this;
    }

    /**
     * Set an array of entry categories
     *
     * @return $this
     */
    public function addCategories(array $categories)
    {
        foreach ($categories as $category) {
            $this->addCategory($category);
        }

        return $this;
    }

    /**
     * Get the entry categories
     *
     * @return null|string
     */
    public function getCategories()
    {
        if (! array_key_exists('categories', $this->data)) {
            return;
        }
        return $this->data['categories'];
    }

    /**
     * Adds an enclosure to the entry. The array parameter may contain the
     * keys 'uri', 'type' and 'length'. Only 'uri' is required for Atom, though the
     * others must also be provided or RSS rendering (where they are required)
     * will throw an Exception.
     *
     * @return $this
     * @throws Exception\InvalidArgumentException
     */
    public function setEnclosure(array $enclosure)
    {
        if (! isset($enclosure['uri'])) {
            throw new Exception\InvalidArgumentException('Enclosure "uri" is not set');
        }
        if (! Uri::factory($enclosure['uri'])->isValid()) {
            throw new Exception\InvalidArgumentException('Enclosure "uri" is not a valid URI/IRI');
        }
        $this->data['enclosure'] = $enclosure;

        return $this;
    }

    /**
     * Retrieve an array of all enclosures to be added to entry.
     *
     * @return array
     */
    public function getEnclosure()
    {
        if (! array_key_exists('enclosure', $this->data)) {
            return;
        }
        return $this->data['enclosure'];
    }

    /**
     * Unset a specific data point
     *
     * @param  string $name
     * @return $this
     */
    public function remove($name)
    {
        if (isset($this->data[$name])) {
            unset($this->data[$name]);
        }

        return $this;
    }

    /**
     * Get registered extensions
     *
     * @return array
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Return an Extension object with the matching name (postfixed with _Entry)
     *
     * @param  string $name
     * @return null|object
     */
    public function getExtension($name)
    {
        $extensionClassName = $name . '\\Entry';
        if (! isset($this->extensions[$extensionClassName])) {
            return null;
        }

        if (! is_object($this->extensions[$extensionClassName])) {
            throw new Exception\RuntimeException(sprintf(
                'Extension is of invalid type; expected object, received "%s"',
                gettype($this->extensions[$extensionClassName])
            ));
        }

        return $this->extensions[$extensionClassName];
    }

    /**
     * Set the current feed type being exported to "rss" or "atom". This allows
     * other objects to gracefully choose whether to execute or not, depending
     * on their appropriateness for the current type, e.g. renderers.
     *
     * @param  string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Retrieve the current or last feed type exported.
     *
     * @return string Value will be "rss" or "atom"
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Method overloading: call given method on first extension implementing it
     *
     * @param  string $method
     * @param  array $args
     * @return mixed
     * @throws Exception\BadMethodCallException If no extensions implements the method.
     */
    public function __call($method, $args)
    {
        foreach ($this->extensions as $extension) {
            try {
                $callback = [$extension, $method];
                return $callback(...$args);
<<<<<<< HEAD
            } catch (BadMethodCallException $e) {
=======
            } catch (\BadMethodCallException $e) {
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            }
        }
        throw new Exception\BadMethodCallException(
            'Method: ' . $method . ' does not exist and could not be located on a registered Extension'
        );
    }

    /**
     * Creates a new Laminas\Feed\Writer\Source data container for use. This is NOT
     * added to the current feed automatically, but is necessary to create a
     * container with some initial values preset based on the current feed data.
     *
     * @return Source
     */
    public function createSource()
    {
        $source = new Source();
        if ($this->getEncoding()) {
            $source->setEncoding($this->getEncoding());
        }
        $source->setType($this->getType());
        return $source;
    }

    /**
     * Appends a Laminas\Feed\Writer\Entry object representing a new entry/item
     * the feed data container's internal group of entries.
     *
     * @return $this
     */
    public function setSource(Source $source)
    {
        $this->data['source'] = $source;
        return $this;
    }

    /**
     * @return null|Source
     */
    public function getSource()
    {
        if (! isset($this->data['source'])) {
            return null;
        }

        if (! $this->data['source'] instanceof Source) {
            throw new Exception\RuntimeException(sprintf(
                'Entry source is of invalid type ("%s")',
                is_object($this->data['source']) ? get_class($this->data['source']) : gettype($this->data['source'])
            ));
        }

        return $this->data['source'];
    }

    /**
     * Load extensions from Laminas\Feed\Writer\Writer
     *
     * @return void
     */
    // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    protected function _loadExtensions()
    {
        $all     = Writer::getExtensions();
        $manager = Writer::getExtensionManager();
        $exts    = $all['entry'];
        foreach ($exts as $ext) {
            $this->extensions[$ext] = $manager->get($ext);
            $this->extensions[$ext]->setEncoding($this->getEncoding());
        }
    }
}
