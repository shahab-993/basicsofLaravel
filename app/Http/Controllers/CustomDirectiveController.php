<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomDirectiveController extends Controller
{
    public function index(){
        $data=[
            'Rating'=>4,
            'FirstName'=>'Khalid',
            'AboutMe'=> "I'am Notorious and I'am Ruthless too!",
            'Salary'=>15000
        ];
        return  view('index',['data'=>$data]);
    }
}
