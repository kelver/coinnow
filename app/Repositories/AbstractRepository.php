<?php

namespace App\Repositories;

use GuzzleHttp\Client;

abstract class AbstractRepository
{
    protected $client;

    protected function resolveClient($rota = 'all'){
        $this->client = new Client([
            'verify' => false
        ]);

        return $this->client->get('https://economia.awesomeapi.com.br/' . $rota);
    }

    public function all(){
        return $this->client->getBody()->getContents();
    }
}
