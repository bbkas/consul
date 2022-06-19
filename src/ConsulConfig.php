<?php

declare(strict_types=1);

namespace Bbkas\Consul;

use http\Client;

class ConsulConfig
{
    private Client $httpClient;
    private string $baseUrl;

    public function __construct(Client $httpClient, string $baseUrl)
    {
        $this->httpClient = $httpClient;
        $this->baseUrl = $baseUrl;
    }
}