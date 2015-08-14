<?php

namespace Foo;

$unpacker = new \MessagePackUnpacker();
$unpacker->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('8200ce0000000001cf000000000000000080');

$data = msgpack_unpack($data);
//$data = $unpacker->unpack($data);

var_dump($data);
