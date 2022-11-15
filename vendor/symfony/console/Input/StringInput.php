<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Exception\InvalidArgumentException;

/**
 * StringInput represents an input provided as a string.
 *
 * Usage:
 *
 *     $input = new StringInput('foo --bar="foobar"');
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringInput extends ArgvInput
{
    public const REGEX_STRING = '([^\s]+?)(?:\s|(?<!\\\\)"|(?<!\\\\)\'|$)';
<<<<<<< HEAD
    public const REGEX_UNQUOTED_STRING = '([^\s\\\\]+?)';
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    public const REGEX_QUOTED_STRING = '(?:"([^"\\\\]*(?:\\\\.[^"\\\\]*)*)"|\'([^\'\\\\]*(?:\\\\.[^\'\\\\]*)*)\')';

    /**
     * @param string $input A string representing the parameters from the CLI
     */
    public function __construct(string $input)
    {
        parent::__construct([]);

        $this->setTokens($this->tokenize($input));
    }

    /**
     * Tokenizes a string.
     *
     * @throws InvalidArgumentException When unable to parse input (should never happen)
     */
    private function tokenize(string $input): array
    {
        $tokens = [];
        $length = \strlen($input);
        $cursor = 0;
        $token = null;
        while ($cursor < $length) {
<<<<<<< HEAD
            if ('\\' === $input[$cursor]) {
                $token .= $input[++$cursor] ?? '';
                ++$cursor;
                continue;
            }

            if (preg_match('/\s+/A', $input, $match, 0, $cursor)) {
                if (null !== $token) {
                    $tokens[] = $token;
                    $token = null;
                }
            } elseif (preg_match('/([^="\'\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', $input, $match, 0, $cursor)) {
                $token .= $match[1].$match[2].stripcslashes(str_replace(['"\'', '\'"', '\'\'', '""'], '', substr($match[3], 1, -1)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', $input, $match, 0, $cursor)) {
                $token .= stripcslashes(substr($match[0], 1, -1));
            } elseif (preg_match('/'.self::REGEX_UNQUOTED_STRING.'/A', $input, $match, 0, $cursor)) {
                $token .= $match[1];
=======
            if (preg_match('/\s+/A', $input, $match, 0, $cursor)) {
            } elseif (preg_match('/([^="\'\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', $input, $match, 0, $cursor)) {
                $tokens[] = $match[1].$match[2].stripcslashes(str_replace(['"\'', '\'"', '\'\'', '""'], '', substr($match[3], 1, \strlen($match[3]) - 2)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', $input, $match, 0, $cursor)) {
                $tokens[] = stripcslashes(substr($match[0], 1, \strlen($match[0]) - 2));
            } elseif (preg_match('/'.self::REGEX_STRING.'/A', $input, $match, 0, $cursor)) {
                $tokens[] = stripcslashes($match[1]);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
            } else {
                // should never happen
                throw new InvalidArgumentException(sprintf('Unable to parse input near "... %s ...".', substr($input, $cursor, 10)));
            }

            $cursor += \strlen($match[0]);
        }

        if (null !== $token) {
            $tokens[] = $token;
        }

        return $tokens;
    }
}
