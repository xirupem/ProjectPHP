<?php

$frase = "A Repetição é mãe da retenção";

$q = strpos($frase,"mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

?>