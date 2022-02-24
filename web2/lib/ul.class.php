<?php
class ul{
    private $ClassCss;
    private $itens = array();

     public function __construct($classe, $itens) {
         $this->classCss = $classe;
         $this->itens = $itens;
     }

     public function addItem($itens) {
         $this->itens = array_marge($this->itens, $itens);
     }

    function __toString() {
        $retorna = "<ul>";
        foreach ($this->itens as $itens) {
            $retorna .= $itens;
        }
        $retorna .= "</ul>";
        return $retorna;
    }

}

