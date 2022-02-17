<?php

class li {

    private $css;
    private $conteudo;

    public function __construct($sCss, $sConteudo){
        $this->setCss($sCss);
        $this->setConteudo($sConteudo);
    }

    public function __toString(){
        return "<li class = '{$this->getCss()}'>{$this->getConteudo()}</li>";
    }
    
    public function setCss($ClassCss){
        $this->css = $ClassCss;
    }

    public function getCss(){
        return $this->css;
    }

    public function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }
    
    public function getConteudo(){
        return $this->conteudo;
    }

}