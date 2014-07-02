<?php

$client = new GearmanClient();
$client->addServer();
$client->doNormal('pop', 'Hello!');
