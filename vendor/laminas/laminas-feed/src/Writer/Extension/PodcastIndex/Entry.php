<?php

<<<<<<< HEAD
=======
/**
 * @see       https://github.com/laminas/laminas-feed for the canonical source repository
 * @copyright https://github.com/laminas/laminas-feed/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-feed/blob/master/LICENSE.md New BSD License
 */

>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
namespace Laminas\Feed\Writer\Extension\PodcastIndex;

use Laminas\Feed\Writer;
use Laminas\Stdlib\StringUtils;
use Laminas\Stdlib\StringWrapper\StringWrapperInterface;

<<<<<<< HEAD
use function array_key_exists;
use function is_numeric;
use function is_string;
use function lcfirst;
use function method_exists;
use function strlen;
use function substr;
use function ucfirst;

=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
/**
 * Describes PodcastIndex data of an entry in a RSS Feed
 */
class Entry
{
    /**
     * Array of Feed data for rendering by Extension's renderers
     *
     * @var array
     */
    protected $data = [];

    /**
     * Encoding of all text values
     *
     * @var string
     */
    protected $encoding = 'UTF-8';

    /**
     * The used string wrapper supporting encoding
     *
     * @var StringWrapperInterface
     */
    protected $stringWrapper;

    public function __construct()
    {
        $this->stringWrapper = StringUtils::getWrapper($this->encoding);
    }

    /**
     * Set feed encoding
     */
    public function setEncoding(string $enc): Entry
    {
        $this->stringWrapper = StringUtils::getWrapper($enc);
        $this->encoding      = $enc;
        return $this;
    }

    /**
     * Get feed encoding
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }

    /**
     * Set entry transcript
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function setPodcastIndexTranscript(array $value): Entry
    {
        if (! isset($value['url']) || ! isset($value['type'])) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "transcript" must be an array containing keys'
                . ' "url" and "type" and optionally "language" and "rel"'
            );
        }
        $this->data['transcript'] = $value;
        return $this;
    }

    /**
     * Set entry chapters
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function setPodcastIndexChapters(array $value): Entry
    {
        if (! isset($value['url']) || ! isset($value['type'])) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "chapters" must be an array containing keys "url" and "type"'
            );
        }
        $this->data['chapters'] = $value;
        return $this;
    }

    /**
     * Add entry soundbites
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function addPodcastIndexSoundbites(array $values): Entry
    {
        foreach ($values as $value) {
            $this->addPodcastIndexSoundbite($value);
        }

        return $this;
    }

    /**
     * Add entry soundbite
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function addPodcastIndexSoundbite(array $value): Entry
    {
        if (! isset($value['startTime']) || ! isset($value['duration'])) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: any "soundbite" must be an array containing'
                . ' keys "startTime" and "duration" and optionally "title"'
            );
        }
<<<<<<< HEAD
        if (
            ! is_string($value['startTime'])
=======
        if (! is_string($value['startTime'])
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            || (! is_numeric($value['startTime']) && strlen($value['startTime']) > 0)
        ) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "startTime" of "soundbite" may only contain numeric characters and dots'
            );
        }
<<<<<<< HEAD
        if (
            ! is_string($value['duration'])
=======
        if (! is_string($value['duration'])
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            || (! is_numeric($value['duration']) && strlen($value['duration']) > 0)
        ) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "duration" may only contain numeric characters and dots'
            );
        }
        if (! isset($this->data['soundbites'])) {
            $this->data['soundbites'] = [];
        }
        $this->data['soundbites'][] = $value;
        return $this;
    }

    /**
     * Overloading: proxy to internal setters
     *
     * @return mixed
     * @throws Writer\Exception\BadMethodCallException
     */
    public function __call(string $method, array $params)
    {
        $point = lcfirst(substr($method, 15));
<<<<<<< HEAD
        if (
            ! method_exists($this, 'setPodcastIndex' . ucfirst($point))
=======
        if (! method_exists($this, 'setPodcastIndex' . ucfirst($point))
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            && ! method_exists($this, 'addPodcastIndex' . ucfirst($point))
        ) {
            throw new Writer\Exception\BadMethodCallException(
                'invalid method: ' . $method
            );
        }
<<<<<<< HEAD
        if (
            ! array_key_exists($point, $this->data)
=======
        if (! array_key_exists($point, $this->data)
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            || empty($this->data[$point])
        ) {
            return;
        }
        return $this->data[$point];
    }
}
