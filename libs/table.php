<?php

class table {

    private $css;
    private $itens = [];
    private $titulos = [];
    
    public function __construct($sCss, array $aTitulos, array $aItens){
        $this->setCss($sCss);
        $this->setTitulos($aTitulos);
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

    public function setTitulos(array $aTitulos){
        $this->titulos = $aTitulos;
    }
    
    public function getTitulos(){
        return $this->titulos;
    }
    
    public function __toString(){
        $sRetorno = "<table style='border' class='{$this->getCss()}'>";
        $sRetorno .= $this->criaTitulos();
        $sRetorno .= $this->criaLinhas();
        return $sRetorno.= "</table>";
    }

    private function criaTitulos(){
        foreach ($this->getTitulos() as $sNome => $sTitulo) {
            $aTh[] = new th('', $sNome, $sTitulo);
        }
        $aTh[] = new th('', 'acoes', 'Ações');
        return new tr('', $aTh);
    }

    private function criaLinhas(){
        foreach ($this->getItens() as $sCampo => $xValor) {
            $aTd[] = new td('', $sCampo, $xValor);
        }
        $aTd[] = new a('https://www.unidavi.edu.br', 'Incluir');
        $aTd[] = new a('https://www.unidavi.edu.br', 'Alterar');
        return new tr('', $aTd);
    }

}
