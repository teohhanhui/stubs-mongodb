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
 * Class CursorId
 * @link https://php.net/manual/en/class.mongodb-driver-cursorid.php
 */
final class CursorId implements \Serializable
{
    /**
     * Create a new CursorId (not used)
     * CursorId objects are returned from Cursor::getId() and cannot be constructed directly.
     * @link https://php.net/manual/en/mongodb-driver-cursorid.construct.php
     * @see Cursor::getId()
     */
    final private function __construct()
    {
    }

    /**
     * String representation of the cursor ID
     * @link https://php.net/manual/en/mongodb-driver-cursorid.tostring.php
     * @return string representation of the cursor ID.
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function __toString()
    {
    }

    /**
     * Serialize a CursorId
     * @since 1.7.0
     * @link https://php.net/manual/en/mongodb-driver-cursorid.serialize.php
     * @return string
     * @throws InvalidArgumentException
     */
    final public function serialize()
    {
    }

    /**
     * Unserialize a CursorId
     * @since 1.7.0
     * @link https://php.net/manual/en/mongodb-driver-cursorid.unserialize.php
     * @param string $serialized
     * @return void
     * @throws InvalidArgumentException on argument parsing errors or if the properties are invalid
     * @throws UnexpectedValueException if the properties cannot be unserialized (i.e. serialized was malformed)
     */
    final public function unserialize($serialized)
    {
    }
}
