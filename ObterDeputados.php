<?php

# http://www.camara.gov.br/sitcamaraws/deputados.asmx/ObterDeputados

include('lib/xml2array.php');

$contents = file_get_contents('data/ObterDeputados.xml');

print_r(xml2array($contents,0));




?>
