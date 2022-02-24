<?php

require ('autoload.php');

$aTitulos = [
    'coluna1' => 'Coluna 1',
    'coluna2' => 'Coluna 2',
    'coluna3' => 'Coluna 3',
    'coluna4' => 'Coluna 4',
    'coluna5' => 'Coluna 5',
    'coluna6' => 'Coluna 6',
];
$aLinhas = [
    'coluna1' => 'Teste 1',
    'coluna2' => 'Teste 2',
    'coluna3' => 'Teste 3',
    'coluna4' => 'Teste 4',
    'coluna5' => 'Teste 5',
    'coluna6' => 'Teste 6',
];
$oTabela = new table('', $aTitulos, $aLinhas);

$oBody = new body([]);
$oBody->addItem($oTabela);

echo new html([criaHead(), $oBody], 'pt-br');


function criaHead(){
    $oHead = new head([]);
    $oHead->addItem(new meta('charset="UTF-8"'));
    $oHead->addItem(new meta('http-equiv="X-UA-Compatible" content="IE=edge"'));
    $oHead->addItem(new meta('name="viewport" content="width=device-width, initial-scale=1.0"'));
    $oHead->addItem(new title('Teste'));
    return $oHead;
}
