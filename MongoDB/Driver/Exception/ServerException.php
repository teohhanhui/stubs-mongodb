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
 * Base class for exceptions thrown by the server. The code of this exception and its subclasses will correspond to the original
 * error code from the server.
 *
 * @link https://secure.php.net/manual/en/class.mongodb-driver-exception-serverexception.php
 * @since 1.5.0
 */
class ServerException extends RuntimeException implements Exception
{
}
