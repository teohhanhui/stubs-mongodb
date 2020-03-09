<?php
/**
 * MongoDB Extension Stub File
 * @version 1.1.9
 * Documentation taken from https://secure.php.net/manual/en/set.mongodb.php
 * @author Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace MongoDB\Driver;

use MongoDB\BSON\Serializable;
use MongoDB\Driver\Exception\AuthenticationException;
use MongoDB\Driver\Exception\BulkWriteException;
use MongoDB\Driver\Exception\CommandException;
use MongoDB\Driver\Exception\ConnectionException;
use MongoDB\Driver\Exception\EncryptionException;
use MongoDB\Driver\Exception\Exception;
use MongoDB\Driver\Exception\InvalidArgumentException;
use MongoDB\Driver\Exception\RuntimeException;
use MongoDB\Driver\Exception\UnexpectedValueException;
use MongoDB\Driver\Exception\WriteConcernException;
use MongoDB\Driver\Exception\WriteException;
use Traversable;

/**
 * WriteConcern controls the acknowledgment of a write operation, specifies the level of write guarantee for Replica Sets.
 */
final class WriteConcern implements Serializable, \Serializable
{
    /**
     * Majority of all the members in the set; arbiters, non-voting members, passive members, hidden members and delayed members are all included in the definition of majority write concern.
     */
    const MAJORITY = 'majority';

    /**
     * Construct immutable WriteConcern
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.construct.php
     * @param string|integer $w
     * @param integer $wtimeout How long to wait (in milliseconds) for secondaries before failing.
     * @param bool $journal Wait until mongod has applied the write to the journal.
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function __construct($w, $wtimeout = 0, $journal = false)
    {
    }

    /**
     * Returns the WriteConcern's "journal" option
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.getjournal.php
     * @return bool|null
     */
    final public function getJournal()
    {
    }

    /**
     * Returns the WriteConcern's "w" option
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.getw.php
     * @return string|int|null
     */
    final public function getW()
    {
    }

    /**
     * Returns the WriteConcern's "wtimeout" option
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.getwtimeout.php
     * @return int
     */
    final public function getWtimeout()
    {
    }

    /**
     * Returns an object for BSON serialization
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-driver-writeconcern.bsonserialize.php
     * @return object Returns an object for serializing the WriteConcern as BSON.
     * @throws InvalidArgumentException
     */
    final public function bsonSerialize()
    {
    }

    /**
     * Serialize a WriteConcern
     * @since 1.7.0
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.serialize.php
     * @return string
     * @throws InvalidArgumentException
     */
    final public function serialize()
    {
    }

    /**
     * Unserialize a WriteConcern
     * @since 1.7.0
     * @link https://php.net/manual/en/mongodb-driver-writeconcern.unserialize.php
     * @param string $serialized
     * @return void
     * @throws InvalidArgumentException on argument parsing errors or if the properties are invalid
     * @throws UnexpectedValueException if the properties cannot be unserialized (i.e. serialized was malformed)
     */
    final public function unserialize($serialized)
    {
    }
}
