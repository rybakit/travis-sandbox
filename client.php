<?php

$client = new GearmanClient();
var_dump($client);exit;

$result = $client->addServer();

var_dump($result);exit;

$client->doBackground('pop', 'Hello!');
