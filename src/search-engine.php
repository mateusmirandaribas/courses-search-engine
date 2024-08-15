<?php

require_once 'index.php';

use Symfony\Component\DomCrawler\Crawler;
use src\Http\SearchEngineClient;

$searchEngineClient = new SearchEngineClient();
$response = $searchEngineClient->get();

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$courses = $crawler->filter('span.card-curso__nome');

foreach ($courses as $course)
{
    echo $course->textContent . PHP_EOL;
}
