AGL Framework - More/Encoder
=======================

Additional Encoder module for [AGL Framework](https://github.com/agl-php/agl-app).

## Installation

Run the following command in the root of your AGL application:

	php composer.phar require agl/more-encoder:*

## Configuration

Edit `app/etc/config/more/encoder/main.php` and enter a key (used to encode and decode strings, must be unique).

## Usage

	$encoder = Agl::getInstance('more/encoder');

Encode string:

	$encoder->encode('string');

Decode string:

	$encoder->decode($encodedString);
