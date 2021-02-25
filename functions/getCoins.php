<?php
header('Content-type: application/json');

function bySigla($sigla){
    $data = file_get_contents('https://economia.awesomeapi.com.br/' . $sigla . '/7');
    echo $data;
}
bySigla($_POST['sigla']);
