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
 * This interface is implemented by MongoDB\BSON\Binary but may also be used for type-hinting and userland classes.
 * @link https://www.php.net/manual/en/class.mongodb-bson-binaryinterface.php
 */
interface BinaryInterface
{
    /**
     * @link https://www.php.net/manual/en/mongodb-bson-binaryinterface.getdata.php
     * @return string Returns the BinaryInterface's data
     */
    function getData();

    /**
     * @link https://www.php.net/manual/en/mongodb-bson-binaryinterface.gettype.php
     * @return int Returns the BinaryInterface's type.
     */
    function getType();

    /**
     * This method is an alias of: MongoDB\BSON\BinaryInterface::getData().
     * @link https://www.php.net/manual/en/mongodb-bson-binaryinterface.tostring.php
     * @return string Returns the BinaryInterface's data.
     */
    function __toString();
}
