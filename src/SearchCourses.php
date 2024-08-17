<?php

namespace src;

use GuzzleHttp\Psr7\Response;
use src\Http\HttpClientInterface;

class SearchCourses
{
    /**
     *
     * @param HttpClientInterface $searchEngineClient
     */
    public function __construct(
        public HttpClientInterface $searchEngineClient
    ){}

    /**
     *
     * @param string $url
     * @return Response
     */
    public function search(string $url): Response
    {
        return $this->searchEngineClient->get($url);
    }
}
