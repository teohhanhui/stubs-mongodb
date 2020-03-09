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
 * This interface is implemented by MongoDB\BSON\UTCDateTime but may also be used for type-hinting and userland classes.
 * @link https://www.php.net/manual/en/class.mongodb-bson-utcdatetimeinterface.php
 */
interface UTCDateTimeInterface
{
    /**
     * @link https://www.php.net/manual/en/mongodb-bson-utcdatetimeinterface.todatetime.php
     * @return DateTime Returns the DateTime representation of this UTCDateTimeInterface. The returned DateTime should use the UTC time zone.
     */
    function toDateTime();

    /**
     * Returns the string representation of this UTCDateTimeInterface
     * @link https://www.php.net/manual/en/mongodb-bson-utcdatetimeinterface.tostring.php
     * @return string
     */
    function __toString();
}
