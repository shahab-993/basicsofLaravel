<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BuiltInHelperMethodsDemoController extends Controller
{
    public function index(){
        $Processors =[
            ['name'=>'Ryzen 3970', 'cores'=>32],
            ['name'=>'Ryzen 3950', 'cores'=>16],
            ['name'=>'Ryzen 3990', 'cores'=>64],
        ];
        $data=[
            'ProbationPeriod'=>4,
            'FirstName'=>'Conners',
            'LastName'=> 'McGregor',
            'PayForFight'=>123456,
            'FirstQuarter'=>['Jan','Feb','Mar'],
            'SecondQuarter'=>['Apr','May','Jun'],
            'FQuarter'=>[1,2,3],
            'SQuater'=>[4,5,6],
            'AboutMe'=>"I'am Notorious and I'am Ruthless too!",
            'now'=>Carbon::now(),
            'PreviousFight'=>'',
            'NextFight'=>null,
            'Processors'=>$Processors,
            'Message'=>'<h1>I am using escape</h1>',
            'WebSite'=>'https://www.uiacademy.co.in'


        ];

        return view ('builtinhelpers.index',compact('data'));
    }
}
