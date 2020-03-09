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
 * The MongoDB\Driver\Cursor class encapsulates the results of a MongoDB command or query and may be returned by MongoDB\Driver\Manager::executeCommand() or MongoDB\Driver\Manager::executeQuery(), respectively.
 * @link https://php.net/manual/en/class.mongodb-driver-cursor.php
 */
final class Cursor implements CursorInterface
{
    /**
     * Create a new Cursor
     * MongoDB\Driver\Cursor objects are returned as the result of an executed command or query and cannot be constructed directly.
     * @link https://php.net/manual/en/mongodb-driver-cursor.construct.php
     */
    final private function __construct()
    {
    }

    /**
     * Returns the MongoDB\Driver\CursorId associated with this cursor. A cursor ID cursor uniquely identifies the cursor on the server.
     * @link https://php.net/manual/en/mongodb-driver-cursor.getid.php
     * @return CursorId for this Cursor
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function getId()
    {
    }

    /**
     * Returns the MongoDB\Driver\Server associated with this cursor. This is the server that executed the query or command.
     * @link https://php.net/manual/en/mongodb-driver-cursor.getserver.php
     * @return Server for this Cursor
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function getServer()
    {
    }

    /**
     * Checks if a cursor is still alive
     * @link https://php.net/manual/en/mongodb-driver-cursor.isdead.php
     * @return bool
     * @throws InvalidArgumentException On argument parsing errors
     */
    final public function isDead()
    {
    }

    /**
     * Sets a type map to use for BSON unserialization
     *
     * @link https://php.net/manual/en/mongodb-driver-cursor.settypemap.php
     *
     * @param array $typemap
     * @return void
     * @throws InvalidArgumentException On argument parsing errors or if a class in the type map cannot
     * be instantiated or does not implement MongoDB\BSON\Unserializable
     */
    final public function setTypeMap(array $typemap)
    {
    }

    /**
     * Returns an array of all result documents for this cursor
     * @link https://php.net/manual/en/mongodb-driver-cursor.toarray.php
     * @return array
     * @throws InvalidArgumentException On argument parsing errors
     */
    final public function toArray()
    {
    }
}
