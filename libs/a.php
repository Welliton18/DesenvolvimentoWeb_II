<?php

class a {

    public function __construct($sUrl = null, $sTexto = null){
        $this->setUrl($sUrl);
        $this->setTexto($sTexto);
    }

    private $url;
    private $texto;
    private $target = "_blanck";
    private $class;

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
        return "<a href={$this->getUrl()} target={$this->getTarget()} class={$this->getClass()}>{$this->getTexto()} </a>";
    }
    
    public function setTarget($sTarget)    {
        $this->target = $sTarget;
    }

    public function getTarget(){
        return $this->target;
    }
    
    public function setClass($class){
        $this->class = $class;
    }

    public function getClass(){
        return $this->class;
    }

}

$oLink = new a();
$oLink->setUrl('https://www.unidavi.edu.br');
$oLink->setTexto('Unidavi');
$oLink->setClass('botao');
$oLink->setTarget('_parent');

echo $oLink->getLink();
echo '<br>';
$oLink2 = new a();
$oLink2->setTexto('site2.com');
echo $oLink2->getLink();
echo '<br>';
$oLink3 = new a('https://www.unidavi.edu.br', 'Unidavi2');
echo $oLink3->getLink();