<?php

$client = new GearmanClient();
$client->addServer();
$client->doBackground('pop', 'Hello!');
