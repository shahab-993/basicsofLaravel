<?php

use App\Http\Controllers\BuiltInHelperMethodsDemoController;
use App\Http\Controllers\CustomDirectiveController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnLaravelBasicsController;
use App\Http\Controllers\ViewComponentsDemoController;

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

Route::get('showproducts', [LearnLaravelBasicsController::class, 'showProducts']);


Route::get('passmodeltobiewdemo', [LearnLaravelBasicsController::class, 'passModelToBiewDemo']);

Route::get('/customdirctives', [CustomDirectiveController::class, 'index']);

Route::get('/builtinherpers', [BuiltInHelperMethodsDemoController::class, 'index']);

Route::get('/getallusers', [LearnLaravelBasicsController::class, 'getallusers']);

Route::get('/showallusersusingcards', [LearnLaravelBasicsController::class, 'showAllUsersUseingCards']);

Route::get('/showuserdetails', [LearnLaravelBasicsController::class, 'showUsersDetails']);


Route::post('/showuserdetails', [LearnLaravelBasicsController::class, 'showUsersDetails']);


Route::get('/workwithcomponents', [ViewComponentsDemoController::class, 'index'])->name('workwithcomponentscd.index');

Route::get('/workwithcomponents/product_list', [ViewComponentsDemoController::class, 'productList'])->name('workwithcomponentscd.productList');

