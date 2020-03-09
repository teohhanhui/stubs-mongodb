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
 * Represents a BSON date.
 * @link https://php.net/manual/en/class.mongodb-bson-utcdatetime.php
 */
final class UTCDateTime implements Type, UTCDateTimeInterface, \Serializable, \JsonSerializable
{
    /**
     * Construct a new UTCDateTime
     * @link https://php.net/manual/en/mongodb-bson-utcdatetime.construct.php
     * @param integer $milliseconds
     */
    final public function __construct($milliseconds=null)
    {
    }

    /**
     * Returns the DateTime representation of this UTCDateTime
     * @link https://php.net/manual/en/mongodb-bson-utcdatetime.todatetime.php
     * @return \DateTime
     */
    final public function toDateTime()
    {
    }

    /**
     * Returns the string representation of this UTCDateTime
     * @link https://php.net/manual/en/mongodb-bson-utcdatetime.tostring.php
     * @return string
     */
    final public function __toString()
    {
    }

    /**
     * Serialize a UTCDateTime
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-utcdatetime.serialize.php
     * @return string
     * @throws InvalidArgumentException
     */
    final public function serialize()
    {
    }

    /**
     * Unserialize a UTCDateTime
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-utcdatetime.unserialize.php
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
     * @link https://www.php.net/manual/en/mongodb-bson-utcdatetime.jsonserialize.php
     * @return mixed data which can be serialized by json_encode()
     * @throws InvalidArgumentException on argument parsing errors
     */
    final public function jsonSerialize()
    {
    }
}
