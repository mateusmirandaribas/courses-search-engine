<?php

namespace src;

use GuzzleHttp\Psr7\Stream;
use Symfony\Component\DomCrawler\Crawler;

class DisplayCourses
{
    /**
     *
     * @param Crawler $crawler
     */
    public function __construct(
        public Crawler $crawler
    ) {}

    /**
     *
     * @param Stream $html
     * @return void
     */
    public function show(Stream $html): void
    {
        $this->crawler->addHtmlContent($html);
        $courses = $this->filterHtmlContent();

        foreach ($courses as $course) {
            echo $course . PHP_EOL;
        }
    }

    /**
     *
     * @return array
     */
    public function filterHtmlContent(): array
    {
        $courseElements = $this->crawler->filter('span.card-curso__nome');

        foreach ($courseElements as $element) {
            $courseArray[] = $element->textContent;
        }

        return $courseArray;
    }
}
