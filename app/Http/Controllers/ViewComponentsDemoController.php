<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViewComponentsDemoController extends Controller {

    private function getResponse( $url ) {
        $response = Http::get( $url );
        return $response->successful() ? $response->json() : [];
    }

    public function index() {
        $categories = $this->getResponse( 'https://fakestoreapi.com/products/categories' );

        array_unshift( $categories, 'All Categories' );

        $products = $this->getResponse( 'https://fakestoreapi.com/products' );

        return view( 'viewcomponent.index', compact( 'categories', 'products' ) );

    }

    public function productList( Request $request ) {

        $category = $request->query( 'category' );

        $categoryMap = [
            "men's clothing" => "men's%20clothing",
            "women's clothing" => "women's%20clothing",
        ];
        $categoryEncoded = $categoryMap[ $category ] ?? urlencode( $category );

        $url = $category == 'All Categories'
        ? 'https://fakestoreapi.com/products'
        : 'https://fakestoreapi.com/products/category/' . $categoryEncoded;

        $products = $this->getResponse( $url );

        return response()->json( [
            'productsHtml' => view( 'components.product', compact( 'products' ) )->render()
        ] );

    }
}
