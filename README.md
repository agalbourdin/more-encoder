More/Encoder
============

Additional Encoder and Hasher module for AGL.

## Installation

Add the following package to the `require` section of your application's `composer.json` file:

	"agl/more-encoder": "*"

Then run the following command:

	php composer.phar update

## Encoder

### Configuration

Edit `app/etc/config/more/encoder/main.php` and enter a key value (used to encode and decode strings, choose a unique key).

### Usage

	$encoder       = Agl::getInstance('more/encoder');
	$encodedString = $encoder::encode('string');
	$encoder::decode($encodedString); // string

## Hasher

### Configuration

No configuration required. This module implements the [password_compat](https://github.com/ircmaxell/password_compat) library, which implements the [PHP Password Hashing Functions](http://php.net/manual/en/ref.password.php) if not available (PHP < 5.5.0).

### Usage

	$hash  = password_hash('password', PASSWORD_DEFAULT);
	$valid = password_verify('password', $hash); // true
