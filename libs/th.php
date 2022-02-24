<?php

class th {

    private $css;
    private $nome;
    private $conteudo;
    
    public function __construct($sCss, $sNome, $sConteudo){
        $this->setCss($sCss);
        $this->setNome($sNome);
        $this->setConteudo($sConteudo);
    }

    public function setCss($sCss){
        $this->css = $sCss;
    }

    public function getCss(){
        return $this->css;
    }
    
    public function setNome($sNome){
        $this->nome = $sNome;
    }

    public function getNome(){
        return $this->nome;
    }
 
    public function setConteudo($aItens){
        $this->conteudo = $aItens;
    }
    
    public function getConteudo(){
        return $this->conteudo;
    }
    
    public function __toString(){
         return "<th style='border:solid 1px' class='{$this->getCss()}'>{$this->getConteudo()}</th>";
    }
}