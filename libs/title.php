<?php

class title {

    private $conteudo;
    
    public function __construct($sConteudo){
        $this->setConteudo($sConteudo);
    }

    public function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }

    public function getConteudo(){
        return $this->conteudo;
    }
    
    public function __toString(){
        return "<title>{$this->getConteudo()}</title>";
    }

}
