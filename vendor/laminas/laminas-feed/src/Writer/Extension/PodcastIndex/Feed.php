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
use function ctype_alpha;
use function is_string;
use function lcfirst;
use function method_exists;
use function strlen;
use function substr;
use function ucfirst;

=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
/**
 * Describes PodcastIndex data of a RSS Feed
 */
class Feed
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
    public function setEncoding(string $enc): Feed
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
     * Set a locked value of "yes" or "no" with an "owner" field.
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function setPodcastIndexLocked(array $value): Feed
    {
        if (! isset($value['value']) || ! isset($value['owner'])) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "locked" must be an array containing keys "value" and "owner"'
            );
        }
<<<<<<< HEAD
        if (
            ! is_string($value['value'])
=======
        if (! is_string($value['value'])
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            || ! ctype_alpha($value['value']) && strlen($value['value']) > 0
        ) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "value" of "locked" may only contain alphabetic characters'
            );
        }
        $this->data['locked'] = $value;
        return $this;
    }

    /**
     * Set feed funding
     *
     * @throws Writer\Exception\InvalidArgumentException
     */
    public function setPodcastIndexFunding(array $value): Feed
    {
        if (! isset($value['title']) || ! isset($value['url'])) {
            throw new Writer\Exception\InvalidArgumentException(
                'invalid parameter: "funding" must be an array containing keys "title" and "url"'
            );
        }
        $this->data['funding'] = $value;
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

        if (! array_key_exists($point, $this->data) || empty($this->data[$point])) {
            return;
        }
        return $this->data[$point];
    }
}
