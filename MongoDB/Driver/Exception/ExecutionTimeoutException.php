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
 * Thrown when a query or command fails to complete within a specified time limit (e.g. maxTimeMS).
 * @link https://php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php
 */
class ExecutionTimeoutException extends ServerException implements Exception
{
}
