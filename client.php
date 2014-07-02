<?php

$client = new GearmanClient();
$result = $client->addServer();

var_dump($result);

$h = $client->doBackground('pop', 'Hello!');

if ($client->returnCode() != GEARMAN_SUCCESS) {
  echo "bad return code\n";
  exit;
}
