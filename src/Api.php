<?php
    namespace Cardmonitor\Skryfall;

    use GuzzleHttp\Client;

    class Api
    {
        protected $client;

        public function __construct()
        {
            $this->client = $this->getClient();

            $this->card = new Card($this->client);
            $this->set = new Set($this->client);
        }

        protected function getClient() : Client
        {
            return new Client([
                'auth'      => 'oauth',
                'base_uri'  => 'https://api.scryfall.com',
                'timeout'   => 5.0,
            ]);
        }

    }