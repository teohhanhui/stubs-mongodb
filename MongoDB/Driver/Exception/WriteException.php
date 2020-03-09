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
 * Base class for exceptions thrown by a failed write operation.
 * The exception encapsulates a MongoDB\Driver\WriteResult object.
 * @link https://php.net/manual/en/class.mongodb-driver-exception-writeexception.php
 * @since 1.0.0
 */
abstract class WriteException extends ServerException implements Exception
{
    /**
     * @var WriteResult associated with the failed write operation.
     */
    protected $writeResult;

    /**
     * @return WriteResult for the failed write operation
     * @since 1.0.0
     */
    final public function  getWriteResult()
    {
    }
}
