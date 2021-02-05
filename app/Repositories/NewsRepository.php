<?php
namespace App\Repositories;

use Carbon\Carbon;
use GuzzleHttp\Client;

class NewsRepository
{
    protected $client = null;

    public function __construct($params)
    {
        $this->client = new Client([
            'verify' => false
        ]);

        return $this->client;
    }

    public function getNews(array $params){
        $data = $this->client->get("http://newsapi.org/v2/everything?q=". urlencode($params['search']) ."&pageSize=". $params['dias'] ."&sortBy=publishedAt&language=pt&apiKey=". config('news.apiKey'));

        return $data->getBody()->getContents();
    }
}
