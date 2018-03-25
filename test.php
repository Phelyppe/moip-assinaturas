<?php 

require_once "Moip.php";

$moip = new Moip();

$plans = $moip->getPlan();

$result = $plans->getPlans();

print_r($result);

 ?>