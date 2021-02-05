<?php


namespace App\Services;

use App\Repositories\NewsRepository;

class NewsService
{
    private $newsRepository = null;

    public function __construct($params = null)
    {
        $this->newsRepository = new NewsRepository($params);
    }

    public function getNews(array $params)
    {
        return $this->newsRepository->getNews($params);
    }
}
