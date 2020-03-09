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
 * The MongoDB\Driver\Command class is a value object that represents a database command.
 * To provide "Command Helpers" the MongoDB\Driver\Command object should be composed.
 * @link https://php.net/manual/en/class.mongodb-driver-command.php
 * @since 1.0.0
 */
final class Command
{
    /**
     * Construct new Command
     * @param array|object $document The complete command to construct
     * @param array $commandOptions Do not use this parameter to specify options described in the command's reference in the MongoDB manual.
     * @throws InvalidArgumentException on argument parsing errors.
     * @link https://secure.php.net/manual/en/mongodb-driver-command.construct.php
     * @since 1.0.0
     */
    final public function __construct($document, array $commandOptions = [])
    {
    }
}
