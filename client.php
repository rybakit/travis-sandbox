<?php

$client = new GearmanClient();
$result = $client->addServer();

var_dump($result);
exit;

$client->doBackground('pop', 'Hello!');
