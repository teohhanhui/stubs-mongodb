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
 * Thrown when the driver encounters a runtime error (e.g. internal error from » libmongoc).
 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php
 * @since 1.0.0
 */
class RuntimeException extends \RuntimeException implements Exception
{
    /**
     * @var boolean
     * @since 1.6.0
     */
    protected $errorLabels;
    /**
     * Whether the given errorLabel is associated with this exception
     *
     * @param string $errorLabel
     * @since 1.6.0
     * @return bool
     */
    final public function hasErrorLabel($errorLabel)
    {
    }
}
