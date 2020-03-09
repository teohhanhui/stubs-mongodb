<?php
/**
 * MongoDB Extension Stub File
 * @version 1.1.9
 * Documentation taken from https://secure.php.net/manual/en/set.mongodb.php
 * @author Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace MongoDB\BSON;

use JsonSerializable;
use MongoDB\Driver\Exception\InvalidArgumentException;
use MongoDB\Driver\Exception\UnexpectedValueException;
use DateTime;

/**
 * Classes may implement this interface to take advantage of automatic ODM (object document mapping) behavior in the driver.
 * @link https://php.net/manual/en/class.mongodb-bson-persistable.php
 */
interface Persistable extends Unserializable, Serializable
{
}
