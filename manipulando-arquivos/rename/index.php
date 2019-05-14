<?php


$dir1 = "folder_01";
$dir2 = "folder_02";

/**
	Cria as pastas se não existe
*/

if (!is_dir($dir1))  mkdir($dir1);
if (!is_dir($dir2))  mkdir($dir2);

$filename = "README.txt";

/**
	Cria o arquivo dentro do dir1 se não existe
*/

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename))
{

	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);

}

rename(
	$dir1 . DIRECTORY_SEPARATOR . $filename, //Origem 
	$dir2 . DIRECTORY_SEPARATOR . $filename // Destino
);

echo "arquivo movido com sucesso!";

?>