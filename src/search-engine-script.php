<?php

require_once 'index.php';

use src\SearchCourses;
use src\DisplayCourses;
use src\Http\SearchEngineClient;
use Symfony\Component\DomCrawler\Crawler;

$searchEngineClient = new SearchEngineClient();
$searchCourses = new SearchCourses($searchEngineClient);

$response = $searchCourses->search('cursos-online-programacao/php');
$html = $response->getBody();

$crawler = new Crawler();
$displayCourses = new DisplayCourses($crawler);

$displayCourses->show($html);
