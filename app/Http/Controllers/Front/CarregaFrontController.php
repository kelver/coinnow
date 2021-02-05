<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class CarregaFrontController extends Controller
{
    public function index($coin = null)
    {
        if(is_null($coin)){
            $coin = 'BTC';
        }
        return view('coinView', ['coin' => $coin]);
    }
}
