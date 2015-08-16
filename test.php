<?php

$obj = (object) ['foo' => 'bar'];

$packer = new \MessagePack(true);
$unpacker = new \MessagePackUnpacker(true);

$data = $packer->pack($obj);

//var_dump($packer->unpack($data));

$unpacker->feed($data);
var_dump($unpacker->execute());
var_dump($unpacker->data());
