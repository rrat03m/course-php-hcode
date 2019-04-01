<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Rafael","idade":22}]';

$pessoas = json_decode($json, true);

print_r($pessoas);

?>