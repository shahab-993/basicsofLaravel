<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Response;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LearnLaravelBasicsController extends Controller
{
    //
public function helloDemo(Request $request)
{
    // return new Response(("<h1>hello word from laravel 11.</h1>"))

}




public function getRequestVariables(Request $request){
$message="";
if($request->isMethod('get')){
if($request->has('Message')){
    $message.="<h1>". request('Message') . "</h1>";
}
else{
    $message ="<h1>Your hanventsupplied any value for Message Parameter..";
}
if($request->has('Country')){
    $message.="<h1>" . request ('Country'). "</h1>";
}
else {
    $message .="<h1>Your hanventsupplied any value for Country Parameter..";

}
}
    return new Response($message,200,['Content-Type' =>'text/html']);
}


public function showDateTimeInfo(Request $request){
    $todaysDate=Carbon::now('Asia/Kolkata');
    $data=[
        'TodaysDate'=>$todaysDate
    ];
    return view('showdatetimeinfo',$data);
}



public function debuggingtechniquesdemo(){
   $data =[
    'name'=>'Connor Mcgregor',
    'email'=>'shahab@gmail.com'
   ];
   echo $data['name'];
   echo $data['email'];
   $sr =serialize($data);
   echo $sr;
   dump($data);

    $data2 =[
        'name'=>'Ahmad shahab',
        'email'=>'Khalid@gamil.com'
    ];
    dump($data2);

    return view('debugdemo',compact('data','data2'));
}


}
