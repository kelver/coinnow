<?php
namespace App\Repositories;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

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
        if (!Cache::has('news')) {
            $returnApi = $this->client->get("http://newsapi.org/v2/everything?q=". urlencode($params['search']) ."&pageSize=". $params['dias'] ."&sortBy=publishedAt&language=pt&apiKey=". config('news.apiKey'));
            $returnApi = $returnApi->getBody()->getContents();
            Cache::put('news', $returnApi, 60 * 60);
        }

        return Cache::get('news');
    }
}
