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
 * This interface is implemented by MongoDB\BSON\ObjectId but may also be used for type-hinting and userland classes.
 * @link https://www.php.net/manual/en/class.mongodb-bson-objectidinterface.php
 */
interface ObjectIdInterface
{
    /**
     * @link https://www.php.net/manual/en/mongodb-bson-objectidinterface.gettimestamp.php
     * @return int Returns the timestamp component of this ObjectIdInterface.
     */
    function getTimestamp();

    /**
     * Returns the hexidecimal representation of this ObjectId
     * @link https://www.php.net/manual/en/mongodb-bson-objectid.tostring.php
     * @return string Returns the hexidecimal representation of this ObjectId
     */
    function __toString();
}
