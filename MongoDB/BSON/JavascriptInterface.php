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
 * Interface JavascriptInterface
 *
 * @link https://secure.php.net/manual/en/class.mongodb-bson-javascriptinterface.php
 * @since 1.3.0
 */
interface JavascriptInterface
{
    /**
     * Returns the JavascriptInterface's code
     * @return string
     * @link https://secure.php.net/manual/en/mongodb-bson-javascriptinterface.getcode.php
     * @since 1.3.0
     */
    public function getCode();

    /**
     * Returns the JavascriptInterface's scope document
     * @return object|null
     * @link https://secure.php.net/manual/en/mongodb-bson-javascriptinterface.getscope.php
     * @since 1.3.0
     */
    public function getScope();

    /**
     * Returns the JavascriptInterface's code
     * @return string
     * @link https://secure.php.net/manual/en/mongodb-bson-javascriptinterface.tostring.php
     * @since 1.3.0
     */
    public function __toString();
}
