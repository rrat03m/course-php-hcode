<?php


$link = "https://www.google.com/logos/doodles/2019/georgios-papanikolaous-136th-birthday-5142131667632128.2-l.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?= $basename ?>">