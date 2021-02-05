<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Routing\Controller as BaseController;

class RequestController
{
    public function getData($url, $tipo)
    {
        $client = new Client([
            'verify' => false
        ]);

        $data = $client->$tipo($url);

        return $data;
    }
}
