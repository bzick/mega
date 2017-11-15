<?php
/**
 *
 */

namespace Orc;


use GuzzleHttp\Client;
use Mage\ControllerAbstract;
use Mage\DI\ContainerAbstract;
use Orc\Controller\RootController;

class Container extends ContainerAbstract
{

    /**
     * @var Client
     */
    public $http_client;

    /**
     * @var \Orc\OrcApiClient
     */
    public $api_client;

    protected function getHTTPClient(): Client
    {
        return new Client([
            "connect_timeout" => 3,
            "timeout" => 5
        ]);
    }

    protected function getApiClient(): OrcApiClient
    {
        return new OrcApiClient($this->http_client);
    }


    protected function getRootController(): ControllerAbstract
    {
        return new RootController();
    }

    /**
     * @return bool
     */
    protected function getDevMode(): bool
    {
        return true;
    }
}