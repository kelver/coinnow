<?php
header('Content-type: application/json');

function getNews($sigla)
{
    if(!$sigla || $sigla == ''){
        $sigla = 'Bitcoin';
    }
    $domains = 'sapo.pt, publico.pt';

    $data = file_get_contents("http://newsapi.org/v2/everything?q=elon&excludeDomains={$domains}&pageSize=7&sortBy=publishedAt&language=pt&apiKey=22dc7327a8924716b7a82420e10ad0da");

    echo $data;
}
getNews($_POST['sigla']);
