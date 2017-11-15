<?php
/**
 *
 */

namespace Orc;


use GuzzleHttp\Client;
use Orc\OrcApi\Response;

class OrcApiClient
{
    private $http_client;

    public function __construct(Client $client)
    {
        $this->http_client = $client;
    }

    public function action(string $method, string $action, array $params): Response
    {
        return new Response();
    }
}