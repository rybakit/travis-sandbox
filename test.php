<?php

$t = new Tarantool();
var_dump($t->connect());
var_dump($t->ping());
