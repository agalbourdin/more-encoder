<?php
namespace Agl\More\Encoder;

/**
 * A set of methods to hash passwords.
 *
 * @category Agl_More
 * @package Agl_More_Encoder
 * @version 0.1.0
 */

class Hasher
{
    /**
     * Library filename.
     */
    const LIB = 'password.php';

    /**
     * The Hasher constructor.
     * Require the PasswordHash library and instanciate it.
     */
    public function __construct()
    {
        \Agl::loadModuleLib(__DIR__, self::LIB);
    }

    /**
     * Hash a string.
     *
     * @param string $pPassword The string to hash
     * @return string Hashed string
     */
    public function hash($pPassword)
    {
        return password_hash($pPassword, PASSWORD_BCRYPT);
    }

    /**
     * Check if a string correspond to a hash.
     *
     * @param string $pPassword The string to hash
     * @param string $pHash The Hash
     * @return bool
     */
    public function check($pPassword, $pHash)
    {
        return password_verify($pPassword, $pHash);
    }
}
