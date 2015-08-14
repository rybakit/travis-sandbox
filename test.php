<?php

namespace Foo;

$unpacker = new \MessagePackUnpacker();
$unpacker->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('ce000000088200000100810102');

$data = msgpack_unpack($data);
//$data = $unpacker->unpack($data);

var_dump($data);
