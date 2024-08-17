<?php

namespace src\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class SearchEngineClient implements HttpClientInterface
{
    /**
     *
     * @var Client
     */
    public Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => getenv('SEARCH_ENGINE_BASE_URL'),
            'verify' => false
        ]);
    }

    /**
     *
     * @param string $url
     * @return Response
     */
    public function get(string $url): Response
    {
        return $this->client->request('GET', $url);
    }
}
