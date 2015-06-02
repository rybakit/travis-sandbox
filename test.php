<?php

$result = (new Tarantool())->authenticate('guest', 'incorrect_password');
var_dump($result);
