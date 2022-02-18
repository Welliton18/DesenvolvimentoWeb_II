<?php

class td {

    private $css;
    private $conteudo;
    
    public function __construct($sCss, $sConteudo){
        $this->setCss($sCss);
        $this->setConteudo($sConteudo);
    }

    public function setCss($sCss){
        $this->css = $sCss;
    }

    public function getCss(){
        return $this->css;
    }
 
    public function setConteudo($aItens){
        $this->conteudo = $aItens;
    }
    
    public function getConteudo(){
        return $this->conteudo;
    }
    
    public function __toString(){
         return "<td class='{$this->getCss()}'>{$this->getConteudo()}</td>";
    }

}
