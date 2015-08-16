<?php

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
