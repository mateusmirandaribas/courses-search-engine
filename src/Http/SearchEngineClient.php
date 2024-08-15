<?php

namespace src\Http;

use GuzzleHttp\Client;

class SearchEngineClient
{
    public Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => getenv('SEARCH_ENGINE_BASE_URL'),
            'verify' => false
        ]);
    }

    public function get()
    {
        return $this->client->request('GET');
    }
}
