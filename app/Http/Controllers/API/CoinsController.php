<?php

namespace App\Http\Controllers\API;

use App\Services\CoinService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CoinsController
{
    private $coinService = null;

    public function __construct()
    {
        $this->coinService = new CoinService();
    }

    public function allCoins()
    {
        $data = $this->coinService->allCoins();
        return response()->json(json_decode($data), 200);
    }

    public function coinBySigla(Request $request)
    {
        $params = $request->all();

        if(!array_key_exists('dias', $params)){
            $params['dias'] = 7;
        }
        if(!array_key_exists('sigla', $params) || $params['sigla'] == ''){
            $params['sigla'] = 'BTC';
        }

        $data['moeda'] = json_decode($this->coinService->coinBySigla($params));

        return response()->json($data, 200);
    }

    public function fechamentoBySigla(Request $request)
    {
        $params = $request->all();
        if(!array_key_exists('dias', $params)){
            $params['dias'] = 7;
        }
        if(!array_key_exists('sigla', $params)){
            $params['sigla'] = 'BTC';
        }

        $data['fechamento'] = array_reverse(json_decode($this->coinService->fechamentoBySigla($params)));

        foreach($data['fechamento']  as $d){
            $d->dia = Carbon::createFromTimestamp($d->timestamp)->formatLocalized('%A');
        }

        return response()->json($data['fechamento'], 200);
    }
}
