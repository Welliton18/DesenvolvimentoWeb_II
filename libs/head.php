<?php

class head {

    private $itens = [];
    
    public function __construct(array $aItens){
        $this->setItens($aItens);
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
        $sRetorno = "<head> ";
        foreach ($this->getItens() as $sItem) {
            $sRetorno .= $sItem;
        }
        $sRetorno.= "</head>";
        return $sRetorno;
        
    }

}