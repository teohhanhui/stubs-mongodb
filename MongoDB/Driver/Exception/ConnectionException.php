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
 * Base class for exceptions thrown when the driver fails to establish a database connection.
 * @link https://php.net/manual/en/class.mongodb-driver-exception-connectionexception.php
 * @since 1.0.0
 */
class ConnectionException extends RuntimeException implements Exception
{
}
