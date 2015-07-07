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
    
    protected function setUp()
    {
        $name = preg_replace('/^test([^\s]+).*$/', '\1', $this->getName());
        $name = strtolower($name);

        $tubeType = $this->getTubeType();
        $tubeName = sprintf('t_%s_%s', $tubeType, $name);
        
        var_dump($tubeType);
        var_dump($tubeName);
    }

    protected function tearDown()
    {
        $this->queue = null;
    }

    public function testEval($data)
    {
        self::$client->evaluate('return 42');
    }
    
    public function testPing()
    {
        var_dump(self::$client->ping());
    }
}
