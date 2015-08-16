<?php

namespace Foo;

$packer = new \MessagePack(true);

$obj = (object) ['foo' => 'bar'];

$data = $packer->pack($obj);
var_dump($packer->unpack($data));
