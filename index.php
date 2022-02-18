<?php

require ('autoload.php');

$oHead = new head([]);
$oHead->addItem(new meta('charset="UTF-8"'));
$oHead->addItem(new meta('http-equiv="X-UA-Compatible" content="IE=edge"'));
$oHead->addItem(new meta('name="viewport" content="width=device-width, initial-scale=1.0"'));
$oHead->addItem(new title('Teste'));

$oBody = new body([new table('', [])]);
/*$aColunas = [
    'Coluna 1',
    'Coluna 2',
    'Coluna 3',
    'Coluna 4',
];
$oTr = new tr();
$oBody->addItem(new table('', [new tr('', [new td('', 'Teste')])]));

*/
echo new html([$oHead, $oBody], 'pt-br');
