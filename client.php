<?php

$client = new GearmanClient();
$result = $client->addServer(/*'127.0.0.1'*/);
//$client->setTimeout(30);

var_dump($result);

$h = $client->doBackground('pop', 'Hello');
$h = $client->doBackground('pop', 'World!');

if ($client->returnCode() != GEARMAN_SUCCESS) {
  echo "bad return code\n";
  exit;
}
