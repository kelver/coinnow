<?php

namespace App\Http\Controllers\API;

use App\Services\NewsService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController
{
    private $noewsService = null;

    public function __construct()
    {
        $this->newsService = new NewsService();
    }

    public function getNews(Request $request)
    {
        $params = $request->all();

        if(!array_key_exists('dias', $params)){
            $params['dias'] = 7;
        }
        if(!array_key_exists('search', $params) || $params['search'] == ''){
            $params['search'] = 'Bitcoin';
        }

        $data['news'] = json_decode($this->newsService->getNews($params));

        return response()->json($data['news'], 200);
    }
}
