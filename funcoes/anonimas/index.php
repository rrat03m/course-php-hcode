<?php


$i = 0;


function ProcessarVideo($callback) {

	// Processo lento

	$callback();
}


ProcessarVideo(function(){

	echo "Terminou!";

})
 
?>