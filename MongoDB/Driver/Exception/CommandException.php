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
 * Thrown when a command fails
 *
 * @link https://php.net/manual/en/class.mongodb-driver-exception-commandexception.php
 * @since 1.5.0
 */
class CommandException extends ServerException
{
    /**
     * Returns the result document for the failed command
     * @link https://secure.php.net/manual/en/mongodb-driver-commandexception.getresultdocument.php
     * @return object
     * @since 1.5.0
     */
    final public function getResultDocument()
    {
    }
}
