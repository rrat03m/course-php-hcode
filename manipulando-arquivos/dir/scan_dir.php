<?php


$imagens = scandir("imagens");

$data = array();

foreach($imagens as $image) {
	if (!in_array($image, array(".", ".."))) {

		$filename = "imagens" . DIRECTORY_SEPARATOR . $image;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://www.cursophphcode.com.br/manipulando-arquivos/dir/".str_replace("\\", "/", $filename);

		array_push($data, $info);

	}
}

echo json_encode($data);

?>