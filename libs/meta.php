<?php

class meta {

    private $item;
    
    public function __construct ($sItem){
        $this->setItem($sItem);
    }
 
    public function setItem($sItem){
        $this->item = $sItem;
    }
    
    public function getItem(){
        return $this->item;
    }
    
    public function __toString(){
        return "<meta {$this->getItem()}>";
    }

}
