<?php

$t = new Tarantool('127.0.0.1', '3301');
var_dump($t->connect());
var_dump($t->ping());
