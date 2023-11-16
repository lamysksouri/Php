<?php
require "MiseEnForme.php";
$ch = new MiseEnForme("Programmation orienrée objet en PHP");
echo "gras : " . $ch->__gras() . '<br>';
echo "italique : " . $ch->__italique() . '<br>';
echo "souligne : " . $ch->__souligne() . '<br>';
echo "majuscule : " . $ch->__majuscule() . '<br>';
?>