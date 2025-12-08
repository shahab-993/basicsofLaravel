<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnLaravelBasicsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hellowworlddemo', [LearnLaravelBasicsController::class, 'helloDemo']);

Route::get('hellowworlddemo', [LearnLaravelBasicsController::class, 'helloDemo']);

Route::get('getrequestvariables', [LearnLaravelBasicsController::class, 'getRequestVariables']);


Route::get('showdatetimeinfo', [LearnLaravelBasicsController::class, 'showDateTimeInfo']);

Route::get('debuggingtechniquesdemo', [LearnLaravelBasicsController::class, 'debuggingtechniquesdemo']);


Route::get('loggingdemo', [LearnLaravelBasicsController::class, 'loggingDemo']);


Route::get('builtindirectivesdemo', [LearnLaravelBasicsController::class, 'builtInDirectivesDemo']);
