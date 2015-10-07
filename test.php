<?php

// https://github.com/msgpack/msgpack-php/issues/64

class Obj
{
    public $a;
    protected $b;
    private $c;

    function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}

$o = new Obj(1, 2, 3);

$serialized = msgpack_serialize($o);
$unserialized = msgpack_unserialize($serialized);
var_dump($unserialized);
exit;


$packer = new \MessagePack(true);
var_dump($packer->unpack(hex2bin('8130dd0000000182a3666f6fa3626172c0a8737464436c617373')));

/*
$obj = (object) ['foo' => 'bar'];

$packer = new \MessagePack(true);
$unpacker = new \MessagePackUnpacker(true);

$data = $packer->pack($obj);

//var_dump($packer->unpack($data));

$unpacker->feed($data);
var_dump($unpacker->execute());
var_dump($unpacker->data());
*/
