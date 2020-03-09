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
 * Thrown when the driver encounters an unexpected value (e.g. during BSON serialization or deserialization).
 * @link https://php.net/manual/en/class.mongodb-driver-exception-unexpectedvalueexception.php
 * @since 1.0.0
 */
class UnexpectedValueException extends \UnexpectedValueException implements Exception
{
}
