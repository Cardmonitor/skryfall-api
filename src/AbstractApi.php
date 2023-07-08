<?php

namespace Cardmonitor\Skryfall;

use GuzzleHttp\Client;

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
        try {
            $response = $this->client->$method($path, [ 'query' => $parameters, 'debug' => $this->debug ]);
            return json_decode($response->getBody(), true);
        }
        catch (\GuzzleHttp\Exception\ClientException $e) {
            return [];
        }
    }

}

?>