<?php
/**
 * MongoDB Extension Stub File
 * @version 1.1.9
 * Documentation taken from https://secure.php.net/manual/en/set.mongodb.php
 * @author Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace MongoDB\Driver\Exception;

use MongoDB\Driver\WriteResult;
use Throwable;

/**
 * Thrown when a bulk write operation fails.
 * @link https://php.net/manual/en/class.mongodb-driver-exception-bulkwriteexception.php
 * @since 1.0.0
 */
class BulkWriteException extends WriteException implements Exception
{
}
