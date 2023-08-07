<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler;

$client = new Client();
$resposta = $client->request(method: 'GET', url: 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);