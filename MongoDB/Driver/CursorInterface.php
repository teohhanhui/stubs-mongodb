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
 * This interface is implemented by MongoDB\Driver\Cursor but may also be used for type-hinting and userland classes.
 * @link https://www.php.net/manual/en/class.mongodb-driver-cursorinterface.php
 * @since 1.6.0
 */
interface CursorInterface extends Traversable
{
    /**
     * Returns the MongoDB\Driver\CursorId associated with this cursor. A cursor ID uniquely identifies the cursor on the server.
     * @return CursorId Returns the MongoDB\Driver\CursorId for this cursor.
     * @throws InvalidArgumentException
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.getid.php
     */
    function getId();

    /**
     * Returns the MongoDB\Driver\Server associated with this cursor.
     * This is the server that executed the MongoDB\Driver\Query or MongoDB\Driver\Command.
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.getserver.php
     * @return Server Returns the MongoDB\Driver\Server associated with this cursor.
     * @throws InvalidArgumentException
     */
    function getServer();

    /**
     * Checks whether the cursor may have additional results available to read.
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.isdead.php
     * @return bool Returns TRUE if additional results are not available, and FALSE otherwise.
     * @throws InvalidArgumentException
     */
    function isDead();

    /**
     * Sets a type map to use for BSON unserialization
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.settypemap.php
     * @param array $typemap Type map configuration.
     * @return mixed
     * @throws InvalidArgumentException
     */
    function setTypeMap(array $typemap);

    /**
     * Iterates the cursor and returns its results in an array.
     * MongoDB\Driver\CursorInterface::setTypeMap() may be used to control how documents are unserialized into PHP values.
     * @return array Returns an array containing all results for this cursor.
     * @throws InvalidArgumentException
     */
    function toArray();
}
