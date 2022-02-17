<?php

class ul {

    private $css;
    private $itens = [];
    
    public function __construct($sCss, array $aItens){
        $this->setCss($sCss);
        $this->setItens($aItens);
    }

    public function setCss($sCss){
        $this->css = $sCss;
    }

    public function getCss(){
        return $this->css;
    }
 
    public function setItens(array $aItens){
        $this->itens = $aItens;
    }
    
    public function getItens(){
        return $this->itens;
    }
    
    public function addItem($sItem){
        $this->itens[] = $sItem;
    }
    
    public function __toString(){
        $sRetorno = "<ul class='{$this->getCss()}'>";
        foreach ($this->getItens() as $sItem) {
            $sRetorno .= $sItem;
        }
        return $sRetorno.= "</ul>";
    }

}
