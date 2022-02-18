<?php

require ('autoload.php');


$aColunas = [
    new td('campo', 'Coluna 1'),
    new td('campo', 'Coluna 2'),
    new td('campo', 'Coluna 3'),
    new td('campo', 'Coluna 4'),
];
$aLinhas = [
    new tr('linha', $aColunas),
    new tr('linha', $aColunas),
    new tr('linha', $aColunas),
];
$oBody = new body([new table('tabela', $aLinhas)]);

echo new html([criaHead(), $oBody], 'pt-br');


function criaHead(){
    $oHead = new head([]);
    $oHead->addItem(new meta('charset="UTF-8"'));
    $oHead->addItem(new meta('http-equiv="X-UA-Compatible" content="IE=edge"'));
    $oHead->addItem(new meta('name="viewport" content="width=device-width, initial-scale=1.0"'));
    $oHead->addItem(new title('Teste'));
    return $oHead;
}
