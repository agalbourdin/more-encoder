More/Encoder
============

Additional Encoder/Hasher module for AGL.

## Installation

Add the following package to the `require` section of your `composer.json` file:

	"agl/more-encoder": "*"

## Configuration

### Encoder

To use the Encoder class, you must create a key which will be used to encode and decode strings.<br>
Create a configuration file into your application:

**app/etc/config/more/encoder.json**

	{
	    "key": "{YOUR_KEY}"
	}

### Hasher

The Hasher class doesn't require any configuration.

## Usage

### Encoder

	$encoder = Agl::getInstance('more/encoder');
	$encoder::encode('string');
	$encoder::decode($encodedString);

### Hasher

	$hasher = Agl::getInstance('more/encoder/hasher');
	$hasher::hash('password');
	$hasher::check('password', $hash);

## More

Learn more about AGL by visiting [**www.agl.io**](http://www.agl.io/)

> Packages used by this module:
> [ircmaxell/password-compat](https://packagist.org/packages/ircmaxell/password-compat)
