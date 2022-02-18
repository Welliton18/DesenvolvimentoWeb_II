<?php

class html {

    private $lingua;
    private $itens = [];
    
    public function __construct(array $aItens, $sLingua){
        $this->setItens($aItens);
        $this->setLingua($sLingua);
    }
    
    public function setLingua($lingua){
        $this->lingua = $lingua;
    }

    public function getLingua(){
        return $this->lingua;
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
        $sRetorno = "<!DOCTYPE html>
                    <html lang='{$this->getLingua()}'>";
        foreach ($this->getItens() as $sItem) {
            $sRetorno .= $sItem;
        }
        return $sRetorno.= "</html>";
    }
}

