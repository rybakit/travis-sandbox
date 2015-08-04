<?php

class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Tarantool
     */
    private static $client;

    public static function setUpBeforeClass()
    {
        self::$client = new \Tarantool(getenv('TNT_HOST'), getenv('TNT_PORT'));
    }

    public static function tearDownAfterClass()
    {
        self::$client->disconnect();
        self::$client = null;
    }

    public function testFoo()
    {
        self::$client->delete('space_conn', [1]);
    }
}
