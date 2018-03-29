<?php 

require_once "MoipSubscription.php";

$token = 'DQ7TIA2B7MSKP4NFCFBTFG9QYLZ04XDJ';
$key = 'XYEXOGOZXJS8PGXBB240WCUY1Y3IL1UOYVURJ44O';
$moip = new MoipSubscription($token, $key, true);

$plans = $moip->plans();

$plans->setCode('TESTE001');
$plans->setName('Plano de testes');
$plans->setAmount(990);

$created = $plans->create();
$result = $plans->getPlan('TESTE001');

print_r($created);
print_r($result);

 ?>