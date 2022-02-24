<?php
    class a {
        private $url;
        private $texto;

        function __construct($pUrl,$pTexto) {
            $this->url = $pUrl;
            $this->texto = $pTexto;
        }

        function __toString() {
            return "<a href=\"{$this->url}\">{$this->texto}</a>";
        }


    }

$link1 = new a("http://unidavi.edu.br", "Unidavi");
echo $link1;
echo '</br>';



$link2 = new a("http://google.com.br", "Google");    
echo $link2;
