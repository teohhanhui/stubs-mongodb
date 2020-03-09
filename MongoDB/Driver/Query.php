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
 * The MongoDB\Driver\Query class is a value object that represents a database query.
 * @link https://php.net/manual/en/class.mongodb-driver-query.php
 */
final class Query
{
    /**
     * Construct new Query
     * @link https://php.net/manual/en/mongodb-driver-query.construct.php
     * @param array|object $filter The search filter.
     * @param array $queryOptions
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function __construct($filter, array $queryOptions = [])
    {
    }
}
