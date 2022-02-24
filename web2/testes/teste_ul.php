<?php

include "../lib/ul.class.php";
include "../lib/li.class.php";

$teste = array(new li ("", "sss"),new li ("", "aula"),new li ("", "teste"));

$ul = new ul("",$teste);
echo $ul;