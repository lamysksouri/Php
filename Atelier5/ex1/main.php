<?php

require "Ville.php";
$ville1 = new Ville("Chebba", "Mahdia");
$ville2 = new Ville("Rades", "Ben Arous");

echo $ville1 . '<br>';
echo $ville2->__toString() . '<br>';
?>