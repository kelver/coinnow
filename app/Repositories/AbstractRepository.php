<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

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
        if (!Cache::has('allCoins')) {
            Cache::rememberForever('allCoins', function(){
                return $this->client->getBody()->getContents();
            });
        }

        return Cache::get('allCoins');
    }
}
