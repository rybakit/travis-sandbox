<?php

namespace Foo;

$packer = new \MessagePack();
$packer->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('82c0a8737464436c617373a3666f6fa3626172');

//$data = msgpack_unpack($data);
$data = $packer->unpack($data);

var_dump($data);
