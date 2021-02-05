<?php


namespace App\Services;

use App\Repositories\CoinRepository;

class CoinService
{
    private $coinRepository = null;

    public function __construct($params = null)
    {
        $this->coinRepository = new CoinRepository($params);
    }

    public function allCoins()
    {
        return $this->coinRepository->all();
    }

    public function coinBySigla(array $params)
    {
        return $this->coinRepository->bySigla($params);
    }

    public function fechamentoBySigla(array $params)
    {
        return $this->coinRepository->fechamentoBySigla($params);
    }
}
