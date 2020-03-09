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
 * The MongoDB\Driver\WriteConcernError class encapsulates information about a write concern error and may be returned by MongoDB\Driver\WriteResult::getWriteConcernError().
 * @link https://php.net/manual/en/class.mongodb-driver-writeconcernerror.php
 */
final class WriteConcernError
{
    /**
     * Returns the WriteConcernError's error code
     * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getcode.php
     * @return int
     */
    final public function getCode()
    {
    }

    /**
     * Returns additional metadata for the WriteConcernError
     * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getinfo.php
     * @return mixed
     */
    final public function getInfo()
    {
    }

    /**
     * Returns the WriteConcernError's error message
     * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getmessage.php
     * @return string
     */
    final public function getMessage()
    {
    }
}
