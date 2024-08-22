<?php

require_once 'index.php';

use src\SearchCourses;
use GuzzleHttp\Psr7\Stream;
use PHPUnit\Framework\TestCase;
use src\Http\SearchEngineClient;

class SearchCoursesTest extends TestCase
{
    public function testSearchCoursesReturnStream()
    {
        $searchEngineClient = new SearchEngineClient();
        $searchCourses = new SearchCourses($searchEngineClient);

        $html = $searchCourses->search('cursos-online-programacao/php');
        $this->assertInstanceOf(Stream::class, $html);
    }
}
