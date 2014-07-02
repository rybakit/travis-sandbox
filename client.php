<?php

$client = new GearmanClient();
$client->addServer();
$client->do('pop', 'Hello!');
