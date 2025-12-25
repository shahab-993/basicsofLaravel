<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomErrorViewDemoController extends Controller {

    public function index() {
        return view( 'customerrors.index' );
    }

    public function show401() {
        abort( 401, 'Unauthorized access.' );
    }

    public function show402() {
        abort( 402, 'Payment required.' );
    }

    public function show403() {

        abort( 403, 'You do not have permission to access this resource.' );
    }

    public function show419() {
        abort( 419, 'Page expired.' );
    }

    public function show429() {
        abort( 429, 'Too many requests. Please slow down.' );
    }

    public function show404() {
        abort( 404, 'Page not found.' );
    }

    public function show500() {
        abort( 500, 'Internal Server Error' );
    }

    public function calculation() {
        $a = 10;
        $b = 2;

        $c = $a + $b;

        $d = $a - $b;

        $e = $a * $b;
        $f = $a / $b;

        return view( 'customerrors.calculation', compact( 'a', 'b', 'c', 'd', 'e', 'f' ) );
    }

}
