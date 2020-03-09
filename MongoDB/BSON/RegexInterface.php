<?php
/**
 * MongoDB Extension Stub File
 * @version 1.1.9
 * Documentation taken from https://secure.php.net/manual/en/set.mongodb.php
 * @author Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace MongoDB\BSON;

use JsonSerializable;
use MongoDB\Driver\Exception\InvalidArgumentException;
use MongoDB\Driver\Exception\UnexpectedValueException;
use DateTime;

/**
 * @link https://www.php.net/manual/en/class.mongodb-bson-regexinterface.php
 * This interface is implemented by MongoDB\BSON\Regex but may also be used for type-hinting and userland classes.
 */
interface RegexInterface
{
    /**
     * @link https://www.php.net/manual/en/mongodb-bson-regexinterface.getflags.php
     * @return string Returns the RegexInterface's flags.
     */
    function getFlags();

    /**
     * @link https://www.php.net/manual/en/mongodb-bson-regexinterface.getpattern.php
     * @return string Returns the RegexInterface's pattern.
     */
    function getPattern();

    /**
     * Returns the string representation of this RegexInterface
     * @link https://www.php.net/manual/en/mongodb-bson-regexinterface.tostring.php
     * @return string
     */
    function __toString();
}
