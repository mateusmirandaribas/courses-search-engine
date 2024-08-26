<?php

namespace src;

use GuzzleHttp\Psr7\Stream;
use src\Http\HttpClientInterface;
use GuzzleHttp\Exception\RequestException;

class SearchCourses
{
    /**
     *
     * @param HttpClientInterface $searchEngineClient
     */
    public function __construct(
        public HttpClientInterface $searchEngineClient
    ) {
    }

    /**
     *
     * @param string $url
     * @return Stream
     * @throws RequestException
     */
    public function search(string $url): Stream
    {
        $response = $this->searchEngineClient->get($url);
        return $response->getBody();
    }
}
