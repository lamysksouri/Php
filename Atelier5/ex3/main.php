<?php
require "Salaire.php";
require"contractuel.php";

$salarie1 = new Salaire("333", "Ksouri", "Lamys", 3000, 123);
echo $salarie1->__infoSalaire();
echo "Le salaire calculé : " . $salarie1->__calculSalaire() . '<br>';

$contractuel1 = new CONTRACTUEL("002", "Ksouri", "Nour", 1000, 300, "2005-06-22", "XXX");
echo $contractuel1->__infoSalaire() . '<br>';
echo "Salaire calculé: " . $contractuel1->__calculSalaire() . '<br>';


?>