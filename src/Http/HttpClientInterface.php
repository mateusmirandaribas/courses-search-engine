<?php

namespace src\Http;

use GuzzleHttp\Psr7\Response;

interface HttpClientInterface
{
    /**
     *
     * @param string $url
     * @return Response
     */
    public function get(string $url): Response;
}
