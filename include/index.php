<?php
require_once "funcao_somar.php";
$nasc = 1990;
$anoAtual =  date('Y');



$resultado = somar($anoAtual, $nasc);

echo 'Sua Idade é <b>'.$resultado.'</b>';

?>