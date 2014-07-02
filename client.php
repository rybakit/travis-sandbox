<?php

$client = new GearmanClient();
$result = $client->addServer();

var_dump($result);

$client->doBackground('pop', 'Hello!');
