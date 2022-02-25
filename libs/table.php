<?php

class table {

    private $css;
    private $itens = [];
    private $titulos = [];
    private $paginaAtual;
    private $totalRegistros;
    private $registrosPagina = REGISTROS_PAGINA;
    
    public function __construct($sCss, array $aTitulos, array $aItens, int $iTotalRegistros = 50, int $iPaginaAtual = 1){
        $this->setCss($sCss);
        $this->setTitulos($aTitulos);
        $this->setItens($aItens);
        $this->setTotalRegistros($iTotalRegistros);
        $this->setPaginaAtual($iPaginaAtual);
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
    
    public function setPaginaAtual($iPaginaAtual){
        $this->paginaAtual = $iPaginaAtual;
    }
    
    public function getPaginaAtual(){
        return $this->paginaAtual;
    }
      
    public function setTotalRegistros($iTotalRegistros){
        $this->totalRegistros = $iTotalRegistros;
    }
    
    public function getTotalRegistros(){
        return $this->totalRegistros;
    }

    public function setRegistrosPagina($iRegistrosPagina){
        $this->registrosPagina = $iRegistrosPagina;
    }
    
    public function getRegistrosPagina(){
        return $this->registrosPagina;
    }
    
    public function __toString(){
        $sRetorno = "<table style='border' class='{$this->getCss()}'>";
        $sRetorno .= $this->criaTitulos();
        $sRetorno .= $this->criaLinhas();
        return $sRetorno.= "</table>" . $this->paginacao();
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
        $oLinkIncluir = new a('https://www.unidavi.edu.br', 'Incluir');
        $oLinkAlterar = new a('https://www.unidavi.edu.br', 'Alterar');
        $aTd[] = new td('', 'incluir', $oLinkIncluir . $oLinkAlterar);
        return new tr('', $aTd);
    }

    private function paginacao(){
        $sRetorno = '';
        for ($i=1; $i <= ceil($this->getTotalRegistros() / $this->getRegistrosPagina()); $i++) { 
            if($this->getPaginaAtual() !== $i){
                $sRetorno .= new a('link', $i);
            }
        }
        return $sRetorno;
    }

}
