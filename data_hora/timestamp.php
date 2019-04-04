<?php

// $ts = strtotime("2001-09-11");


$ts = strtotime("+ 1 week + 1 day +1 hour +30 i");

echo date("l, d/m/Y H:i:s", $ts);

?>