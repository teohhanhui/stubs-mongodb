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
 * Base class for exceptions thrown during client-side encryption.
 * @link https://php.net/manual/en/class.mongodb-driver-exception-encryptionexception.php
 * @since 1.7.0
 */
class EncryptionException extends RuntimeException implements Exception
{
}
