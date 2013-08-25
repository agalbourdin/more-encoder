AGL Framework - More/Encoder
=======================

[![Latest Stable Version](https://poser.pugx.org/agl/more-encoder/v/stable.png)](https://packagist.org/packages/agl/more-encoder)
[![Build Status](https://travis-ci.org/agl-php/more-encoder.png)](https://travis-ci.org/agl-php/more-encoder)

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
