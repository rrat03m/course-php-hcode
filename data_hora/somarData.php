<?php

$dt = new DateTime();

$periodo = new DateInterval("P1D P1M P1Y");

echo $dt->format("d/m/Y h:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y h:i:s");

?>