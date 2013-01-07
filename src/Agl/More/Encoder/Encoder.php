<?php
namespace Agl\More\Encoder;

use \Agl;

/**
 * A set of methods to encode and decode strings.
 *
 * @category Agl_More
 * @package Agl_More_Encoder
 * @version 0.1.0
 */

class Encoder
{
    /**
     * Convert an hexadecimal string into a binary string.
     *
     * @param string $pSource Hexadecimal string
     * @return string Binary string
     */
    private static function _hex2bin($pSource)
    {
        $strlen = strlen($pSource);
        $bin = '';
        for ($i = 0; $i < strlen($pSource); $i = $i + 2) {
            $bin .= chr(hexdec(substr($pSource, $i, 2)));
        }

        return $bin;
    }

    /**
     * Encode a string.
     *
     * @param string $pStr Strin to encode
     * @return string Encoded string
     */
    public static function encode($pStr)
    {
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB), MCRYPT_RAND);
        return bin2hex(mcrypt_encrypt(MCRYPT_BLOWFISH, Agl::app()->getConfig('@module[' . Agl::AGL_MORE_POOL . '/encoder]/key'), $pStr, MCRYPT_MODE_ECB, $iv));
    }

    /**
     * Decode en string.
     *
     * @param string $pStr String to decode
     * @return string Decoded string
     */
    public static function decode($pStr)
    {
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB), MCRYPT_RAND);
        return trim(mcrypt_decrypt(MCRYPT_BLOWFISH, Agl::app()->getConfig('@module[' . Agl::AGL_MORE_POOL . '/encoder]/key'), self::_hex2bin($pStr), MCRYPT_MODE_ECB, $iv), "\0");
    }
}
