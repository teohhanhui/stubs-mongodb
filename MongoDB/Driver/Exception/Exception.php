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
 * Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.
 * @link https://php.net/manual/en/class.mongodb-driver-exception-exception.php
 */
interface Exception extends Throwable
{
}
