<?php

require_once 'libs/cabecalho.html';
require ('autoload.php');

$oTeste[] = new li('', 'Teste');
$oTeste[] = new li('', 'Teste2');
$oTeste[] = new li('', 'Teste3');
$oTeste[] = new li('', 'Teste4');
$oTeste[] = new li('', 'Teste5');

echo new ul('', $oTeste);

require_once 'libs/rodape.html';