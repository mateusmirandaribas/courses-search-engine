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
    ){}

    /**
     *
     * @param string $url
     * @return Stream
     * @throws RequestException
     */
    public function search(string $url): Stream
    {
        try {
            $response = $this->searchEngineClient->get($url);
            return $response->getBody();
        } catch (RequestException $exception) {
            echo $exception->getMessage() . $exception->getCode() . PHP_EOL;
            echo "Closing application." . PHP_EOL;
            exit(1);
        }
    }
}
