<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViewComponentsDemoController extends Controller
{
    private function getResponse($url){
        $response=Http::get($url);
        return $response->successful()? $response->json():[];
    }
    public function index(){
        $categories=$this->getResponse('https://fakestoreapi.com/products/categories');

        array_unshift($categories,'All Categories');

        $products=$this->getResponse('https://fakestoreapi.com/products');

        return view('viewcomponent.index',compact('categories','products'));

    }
}
