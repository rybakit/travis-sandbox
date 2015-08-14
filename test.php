<?php

namespace Foo;

$unpacker = new \MessagePackUnpacker();
$unpacker->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('81a16102');

$data = msgpack_unpack($data);
//$data = $unpacker->unpack($data);

var_dump($data);
