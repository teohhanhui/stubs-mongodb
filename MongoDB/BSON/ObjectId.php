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
 * Class ObjectId
 * @link https://php.net/manual/en/class.mongodb-bson-objectid.php
 */
final class ObjectId implements Type, ObjectIdInterface, \Serializable, JsonSerializable
{
    /**
     * Construct a new ObjectId
     * @link https://php.net/manual/en/mongodb-bson-objectid.construct.php
     * @param string|null $id A 24-character hexadecimal string. If not provided, the driver will generate an ObjectId.
     * @throws InvalidArgumentException if id is not a 24-character hexadecimal string.
     */
    public final function __construct($id = null)
    {
    }

    /**
     * Returns the hexidecimal representation of this ObjectId
     * @link https://php.net/manual/en/mongodb-bson-objectid.tostring.php
     * @return string
     */
    final public function __toString()
    {
    }

    /**
     * Returns the timestamp component of this ObjectId
     * @since 1.2.0
     * @link https://secure.php.net/manual/en/mongodb-bson-objectid.gettimestamp.php
     * @return int the timestamp component of this ObjectId
     */
    public final function getTimestamp()
    {
    }

    /**
     * Returns a representation that can be converted to JSON
     * @since 1.2.0
     * @link https://secure.php.net/manual/en/mongodb-bson-objectid.jsonserialize.php
     * @return mixed data which can be serialized by json_encode()
     */
    final public function jsonSerialize()
    {
    }

    /**
     * Serialize an ObjectId
     * @since 1.2.0
     * @link https://secure.php.net/manual/en/mongodb-bson-objectid.serialize.php
     * @return string the serialized representation of the object
     */
    final public function serialize()
    {
    }

    /**
     * Unserialize an ObjectId
     * @since 1.2.0
     * @link https://secure.php.net/manual/en/mongodb-bson-objectid.unserialize.php
     * @return void
     */
    final public function unserialize($serialized)
    {
    }
}
