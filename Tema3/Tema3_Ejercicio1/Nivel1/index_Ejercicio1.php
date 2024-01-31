<?php
include_once'tigger.php';

$personajeTigger = Tigger::getInstance();
$personajeTigger->roar();
$personajeTigger->roar();
$personajeTigger->roar();
$personajeTigger->roar();

echo "El personaje Tigger rugió " . $personajeTigger->getContador() .  " veces.";

?>