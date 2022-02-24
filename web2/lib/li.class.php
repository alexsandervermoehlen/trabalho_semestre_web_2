<?php

class li {
    private $ClassCss;
    private $conteudo;

    public function __construct($class, $conteudo) {
        $this->classCss = $class;
        $this->conteudo = $conteudo;
    }

    public function __toString() {
        return "<li class=\"{$this->classCss}\">{$this->conteudo}</li>";
    }
}