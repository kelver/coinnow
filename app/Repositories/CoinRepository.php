<?php
namespace App\Repositories;

use Carbon\Carbon;

class CoinRepository extends AbstractRepository
{
    protected $client = null;


    public function __construct($params)
    {
        $this->client = $this->resolveClient();
    }

    public function bySigla(array $params){
        $data = $this->resolveClient($params['sigla'] . '/' . $params['dias']);

        return $data->getBody()->getContents();
    }

    public function fechamentoBySigla(array $params){
        $rota = 'daily/' . $params['sigla'] . '?start_date=' . Carbon::now()->subDays(7)->format('Ymd') . '&end_date=' . Carbon::now()->format('Ymd');

        $data = $this->resolveClient($rota);

        return $data->getBody()->getContents();
    }
}
