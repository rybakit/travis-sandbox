<?php

namespace Foo;

$unpacker = new \MessagePackUnpacker();
$unpacker->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('8200ce0000000001cf000000000000000080');
var_dump($unpacker->unpack($data));
