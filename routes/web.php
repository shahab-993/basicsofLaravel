<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponseTypesDemoController;
use App\Http\Controllers\LearnLaravelBasicsController;
use App\Http\Controllers\ViewComponentsDemoController;
use App\Http\Controllers\CustomErrorViewDemoController;
use App\Http\Controllers\CustomDirectivesDemoController;
use App\Http\Controllers\BuiltInHelperMethodsDemoController;
use App\Http\Controllers\RouteParametersValidationsDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravelbasics', function () {
    return view('laravelbasics');
});

Route::get('helloworlddemo',[LearnLaravelBasicsController::class,'helloWorldDemo']);

Route::get('showmoremessages',[LearnLaravelBasicsController::class,'showMoreMessages']);

Route::get('usevariablesasresponse',[LearnLaravelBasicsController::class,'useVariablesAsResponse']);

Route::get('getrequestvariables',[LearnLaravelBasicsController::class,'getRequestVariables']);

Route::get('showdatetimeinfo',[LearnLaravelBasicsController::class,'showDateTimeInfo']);

Route::get('builtindirectivesdemo',[LearnLaravelBasicsController::class,'builtInDirectivesDemo']);

Route::get('/customdirectives', [CustomDirectivesDemoController::class, 'index']);

Route::get('/builtinhelpers', [BuiltInHelperMethodsDemoController::class, 'index']);

Route::get('getallusers',[LearnLaravelBasicsController::class,'getAllUsers']);
Route::get('showallusersusingcards',[LearnLaravelBasicsController::class,'showAllUsersUsingCards']);

Route::get('userdetails',[LearnLaravelBasicsController::class,'showUserDetails']);
Route::post('userdetails',[LearnLaravelBasicsController::class,'showUserDetails']);

Route::get('showProducts',[LearnLaravelBasicsController::class,'showProducts']);

Route::get('/debuggingtechniquesdemo', [LearnLaravelBasicsController::class, 'debuggingtechniquesdemo']);

Route::get('/loggingdemo', [LearnLaravelBasicsController::class, 'loggingDemo']);

Route::get('/passmodel', [LearnLaravelBasicsController::class, 'passModelToViewDemo']);


// custom errors
Route::get('/error/index', [CustomErrorViewDemoController::class, 'index']);
Route::get('/error/401', [CustomErrorViewDemoController::class, 'show401'])->name('errors.show401');
Route::get('/error/402', [CustomErrorViewDemoController::class, 'show402'])->name('errors.show402');
Route::get('/error/403', [CustomErrorViewDemoController::class, 'show403'])->name('errors.show403');
Route::get('/error/404', [CustomErrorViewDemoController::class, 'show404'])->name('errors.show404');
Route::get('/error/419', [CustomErrorViewDemoController::class, 'show419'])->name('errors.show419');
Route::get('/error/429', [CustomErrorViewDemoController::class, 'show429'])->name('errors.show429');
Route::get('/error/500', [CustomErrorViewDemoController::class, 'show500'])->name('errors.show500');


Route::get('/showproducts', [ResponseTypesDemoController::class, 'showProducts']);

Route::get('/wishuser/{message}', [ResponseTypesDemoController::class, 'wishUser'])->name('responsetypes.wishuser');


Route::get('/gotourl', [ResponseTypesDemoController::class, 'gotoURL']);


Route::get('/gotourlpermanent', [ResponseTypesDemoController::class, 'gotoURLPermanently']);


Route::get('/gotocontactsaction', [ResponseTypesDemoController::class, 'gotoContactsAction']);

Route::get('/gotobyroutename/{message}', [ResponseTypesDemoController::class, 'gotowishUserByRouteName']);


Route::get('/downloadfiles', [ResponseTypesDemoController::class, 'downloadFile']);

Route::get('/showimage', [ResponseTypesDemoController::class, 'showImage']);

Route::get('/downloadxml', [ResponseTypesDemoController::class, 'downloadXML']);















