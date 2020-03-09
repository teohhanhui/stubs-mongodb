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
 * The MongoDB\Driver\WriteError class encapsulates information about a write error and may be returned as an array element from MongoDB\Driver\WriteResult::getWriteErrors().
 */
final class WriteError
{
    /**
     * Returns the WriteError's error code
     * @link https://php.net/manual/en/mongodb-driver-writeerror.getcode.php
     * @return int
     */
    final public function getCode()
    {
    }

    /**
     * Returns the index of the write operation corresponding to this WriteError
     * @link https://php.net/manual/en/mongodb-driver-writeerror.getindex.php
     * @return int
     */
    final public function getIndex()
    {
    }

    /**
     * Returns additional metadata for the WriteError
     * @link https://php.net/manual/en/mongodb-driver-writeerror.getinfo.php
     * @return mixed
     */
    final public function getInfo()
    {
    }

    /**
     * Returns the WriteError's error message
     * @link https://php.net/manual/en/mongodb-driver-writeerror.getmessage.php
     * @return string
     */
    final public function getMessage()
    {
    }
}
