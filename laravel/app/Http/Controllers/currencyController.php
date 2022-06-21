<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;

class currencyController extends Controller
{
    public function index(){
        return view('index',[
            'codes' => Currency::rates()->latest()->get()
        ]);
    }
    public function convert(){

        $currency= Currency::convert()->from('USD')->to('EUR')->amount(100)->get();
        
        
        // dd($codes);


    }
}
