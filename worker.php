<?php

$worker = new \GearmanWorker();
$worker->addServer();

$workerId = uniqid(getmypid().'_', true);
$worker->addFunction('pop', function(\GearmanJob $job) use ($workerId) {
    echo "$workerId\n";
    return $workerId;
});

echo "Waiting for a job...\n";
while ($worker->work()) {
    if (GEARMAN_SUCCESS != $worker->returnCode()) {
        echo $worker->error()."\n";
        exit(1);
    }
}
