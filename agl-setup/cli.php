<?php
$currentDir = dirname(__FILE__) . DIRECTORY_SEPARATOR;

return array(

    // Copy configuration file.
    'file:copy' => array(
        $currentDir . 'app/etc/config/more/encoder/main.php',
        APP_PATH    . 'app/etc/config/more/encoder/main.php'
    ),

    // Generate random key.
    'file:replace' => array(
        APP_PATH . 'app/etc/config/more/encoder/main.php',
        '"\'key\' => \'\'"',
        '"\'key\' => \'' . hash('MD5', openssl_random_pseudo_bytes(32)) . '\'"',
    )
);
