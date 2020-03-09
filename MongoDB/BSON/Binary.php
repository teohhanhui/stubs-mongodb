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
 * Class Binary
 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
 */
final class Binary implements Type, BinaryInterface, \Serializable, JsonSerializable
{
    const TYPE_GENERIC = 0;
    const TYPE_FUNCTION = 1;
    const TYPE_OLD_BINARY = 2;
    const TYPE_OLD_UUID = 3;
    const TYPE_UUID = 4;
    const TYPE_MD5 = 5;
    /**
     * @since 1.7.0
     */
    const TYPE_ENCRYPTED = 6;
    const TYPE_USER_DEFINED = 128;

    /**
     * Binary constructor.
     * @link https://php.net/manual/en/mongodb-bson-binary.construct.php
     * @param string $data
     * @param integer $type
     */
    public final function __construct($data, $type)
    {
    }

    /**
     * Returns the Binary's data
     * @link https://php.net/manual/en/mongodb-bson-binary.getdata.php
     * @return string
     */
    final public function getData()
    {
    }

    /**
     * Returns the Binary's type
     * @link https://php.net/manual/en/mongodb-bson-binary.gettype.php
     * @return integer
     */
    final public function getType()
    {
    }

    public static function __set_state($an_array)
    {
    }

    /**
     * Returns the Binary's data
     * @link https://www.php.net/manual/en/mongodb-bson-binary.tostring.php
     * @return string
     */
    final public function __toString()
    {
    }

    /**
     * Serialize a Binary
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-binary.serialize.php
     * @return string
     * @throws InvalidArgumentException
     */
    final public function serialize()
    {
    }

    /**
     * Unserialize a Binary
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-binary.unserialize.php
     * @param string $serialized
     * @return void
     * @throws InvalidArgumentException on argument parsing errors or if the properties are invalid
     * @throws UnexpectedValueException if the properties cannot be unserialized (i.e. serialized was malformed)
     */
    final public function unserialize($serialized)
    {
    }

    /**
     * Returns a representation that can be converted to JSON
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-binary.jsonserialize.php
     * @return mixed data which can be serialized by json_encode()
     * @throws InvalidArgumentException on argument parsing errors
     */
    final public function jsonSerialize()
    {
    }
}
