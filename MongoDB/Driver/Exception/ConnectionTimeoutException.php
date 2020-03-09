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
 * Thrown when the driver fails to establish a database connection within a specified time limit (e.g. connectTimeoutMS).
 * @link https://php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php
 */
class ConnectionTimeoutException extends ConnectionException implements Exception
{
}
