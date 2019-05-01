<?php
// Produtos
$omega_3 =  58;
$dipirona = 2;
$sacolas = 5;



echo "Valor sem desconto: ".$total = ($omega_3 + $dipirona + $sacolas);

echo "<br>";



if(($total > 50) and ($total < 60))
{	

	$discount = 20;

	$total = $total *  (100 - $discount) / 100;

}elseif ($total > 60) {
	
	$discount = 30;

	$total = $total *  (100 - $discount) / 100;
}




echo "Total com desconto: ".$total;