<?php
/**
 * MongoDB Extension Stub File
 * @version 1.1.9
 * Documentation taken from https://secure.php.net/manual/en/set.mongodb.php
 * @author Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace MongoDB\Driver;

use MongoDB\BSON\Serializable;
use MongoDB\Driver\Exception\AuthenticationException;
use MongoDB\Driver\Exception\BulkWriteException;
use MongoDB\Driver\Exception\CommandException;
use MongoDB\Driver\Exception\ConnectionException;
use MongoDB\Driver\Exception\EncryptionException;
use MongoDB\Driver\Exception\Exception;
use MongoDB\Driver\Exception\InvalidArgumentException;
use MongoDB\Driver\Exception\RuntimeException;
use MongoDB\Driver\Exception\UnexpectedValueException;
use MongoDB\Driver\Exception\WriteConcernException;
use MongoDB\Driver\Exception\WriteException;
use Traversable;

/**
 * The MongoDB\Driver\ClientEncryption class handles creation of data keys for client-side encryption, as well as manually encrypting and decrypting values.
 * @link https://www.php.net/manual/en/class.mongodb-driver-clientencryption.php
 * @since 1.7.0
 */
final class ClientEncryption
{
    const AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC = 'AEAD_AES_256_CBC_HMAC_SHA_512-Deterministic';
    const AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM = 'AEAD_AES_256_CBC_HMAC_SHA_512-Random';

    final private function __construct()
    {
    }

    /**
     * Creates a new key document and inserts into the key vault collection.
     * @link https://www.php.net/manual/en/mongodb-driver-clientencryption.createdatakey.php
     * @param string $kmsProvider The KMS provider ("local" or "aws") that will be used to encrypt the new encryption key.
     * @param array $options [optional]
     * @return \MongoDB\BSON\Binary Returns the identifier of the new key as a MongoDB\BSON\Binary object with subtype 4 (UUID).
     * @throws InvalidArgumentException On argument parsing errors.
     * @throws EncryptionException If an error occurs while creating the data key.
     */
    final public function createDataKey($kmsProvider, $options = [])
    {
    }

    /**
     * Decrypts an encrypted value (BSON binary of subtype 6).
     * @link https://www.php.net/manual/en/mongodb-driver-clientencryption.decrypt.php
     * @param \MongoDB\BSON\Binary $value A MongoDB\BSON\Binary instance with subtype 6 containing the encrypted value.
     * @return mixed Returns the decrypted value
     * @throws InvalidArgumentException On argument parsing errors.
     * @throws EncryptionException If an error occurs while decrypting the value.
     */
    final public function decrypt(\MongoDB\BSON\Binary $value)
    {
    }

    /**
     * Encrypts a value with a given key and algorithm.
     * @link https://www.php.net/manual/en/mongodb-driver-clientencryption.encrypt.php
     * @param mixed $value The value to be encrypted. Any value that can be inserted into MongoDB can be encrypted using this method.
     * @param array $options [optional]
     * @return \MongoDB\BSON\Binary Returns the encrypted value as MongoDB\BSON\Binary object with subtype 6.
     * @throws InvalidArgumentException On argument parsing errors.
     * @throws EncryptionException If an error occurs while encrypting the value.
     */
    final public function encrypt($value, $options = [])
    {
    }
}
