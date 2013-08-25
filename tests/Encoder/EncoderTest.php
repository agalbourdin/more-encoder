<?php
class EncoderTest
    extends PHPUnit_Framework_TestCase
{
    protected static $_instance = NULL;

    public static function setUpBeforeClass()
    {
        self::$_instance = new \Agl\More\Encoder\Encoder('azerty');
    }

    public function testEncode()
    {
        $this->assertEquals(self::$_instance->encode('test'), '7d656b5363a11a43');
    }

    public function testDecode()
    {
        $this->assertEquals(self::$_instance->decode('7d656b5363a11a43'), 'test');
    }
}
