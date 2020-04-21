<?php 
	
$dt = new DateTime();

$periodo = new DateInterval("P10D");


echo $dt->format("d/m/Y H:i:s");
echo"<br>";
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>