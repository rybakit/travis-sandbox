<?php

namespace Foo;

$packer = new \MessagePack();
$packer->setOption(\MessagePack::OPT_PHPONLY, false);

$data = hex2bin('82c0a8737464436c617373a3666f6fa3626172');

var_dump($packer->unpack($data));

ini_set('msgpack.php_only', 0);
var_dump(msgpack_unpack($data));
