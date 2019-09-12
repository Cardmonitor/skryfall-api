<?php

namespace Cardmonitor\Skryfall;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

abstract class AbstractApi
{
    protected $client;
    protected $debug = false;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function _get(string $path, array $parameters = []) : array
    {
        return $this->request('GET', $path, $parameters);
    }

    protected function request(string $method, string $path = '', array $parameters = []) : array
    {
        $response = $this->client->$method($path, [ 'query' => $parameters, 'debug' => $this->debug ]);

        return json_decode($response->getBody(), true);
    }

}

?>