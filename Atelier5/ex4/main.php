<?php

require_once('Adulte.php');
require_once('Adolescent.php');

$adulte1 = new Adulte("Ksouri", "Lamys", "Actor", 30000);
$adolescent1 = new Adolescent("Ksouri", "Nour", 18, "Drawing");

echo $adulte1->__getInfo() . '<br>';
echo $adolescent1->__getInfo() . '<br>';

?>
