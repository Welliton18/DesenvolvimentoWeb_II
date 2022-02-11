<?php

class a {

    public function __construct($sUrl = null, $sTexto = null){
        $this->setUrl($sUrl);
        $this->setTexto($sTexto);
    }

    private $url;
    private $texto;

    public function setUrl($sUrl){
        $this->url = $sUrl;
    }
    
    public function getUrl(){
        return $this->url;
    }
    
    public function setTexto($sTexto){
        $this->texto = $sTexto;
    }
    
    public function getTexto(){
        return $this->texto;
    }

    public function getLink(){
        return "<a href={$this->getUrl()}>{$this->getTexto()} </a>";
    }

    //https://www.w3schools.com/
}

$oLink = new a();
$oLink->setUrl('https://www.unidavi.edu.br');
$oLink->setTexto('Unidavi');
echo $oLink->getLink();
echo '<br>';
$oLink2 = new a();
$oLink2->setTexto('site2.com');
echo $oLink2->getLink();
echo '<br>';
$oLink3 = new a('https://www.unidavi.edu.br', 'Unidavi2');
echo $oLink3->getLink();