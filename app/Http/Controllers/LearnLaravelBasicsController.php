<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\Debugbar\Facade as Debugbar;
use DebugBar\DebugBar as DebugBarAlias;
use Illuminate\Support\Facades\Log;

class LearnLaravelBasicsController extends Controller
{
    public function helloDemo(Request $request) {}

    public function getRequestVariables(Request $request)
    {
        $message = "";
        if ($request->isMethod('get')) {
            if ($request->has('Message')) {
                $message .= "<h1>" . request('Message') . "</h1>";
            } else {
                $message = "<h1>You haven't supplied any value for Message parameter.</h1>";
            }

            if ($request->has('Country')) {
                $message .= "<h1>" . request('Country') . "</h1>";
            } else {
                $message .= "<h1>You haven't supplied any value for Country parameter.</h1>";
            }
        }

        return new Response($message, 200, ['Content-Type' => 'text/html']);
    }

    public function showDateTimeInfo(Request $request)
    {
        $todaysDate = Carbon::now('Asia/Kolkata');
        return view('showdatetimeinfo', ['TodaysDate' => $todaysDate]);
    }

    public function debuggingtechniquesdemo()
    {
        $data = [
            'name' => 'Connor Mcgregor',
            'email' => 'shahab@gmail.com'
        ];

        $data2 = [
            'name' => 'Ahmad shahab',
            'email'=>'khalid@gmail.com'

        ];

        dump($data);
        dump($data2);

        Debugbar::info($data);
        Debugbar::info($data2);

        $a = 10;
        $b = 20;
        $c = $a + $b;
        $d = $a - $b;
        $e = $a * $b;
        $f = $a / $b;
        Debugbar::info($a);
        Debugbar::error($b);
        Debugbar::warning($c);
        Debugbar::info($d);
        Debugbar::info($e);
        Debugbar::info($f);

        return view('debugdemo', compact('data', 'data2'));
    }

    public function loggingDemo()
    {
        log::emergency('Emergency: System is unusable!');
        log::alert('Alert: action must be taken immediately!');
        Log::critical('Critical: critical conditions      !');
        log::error('Error: error conditions!');
        log::warning('Warinig: worning conditions!');
        log::notice('Notice:normal but significant codition!');
        log::info('Informational: informational messages!');
        log::debug('Debug: debug-level message!');

        Log::info('User logged in', ['user_id' => 123]);
        Log::error('Something went wrong', ['user_id' => 123, 'error_code' => 500]);

        log::channel('custom')->emergency('Emergency: System is unusable!');
        log::channel('custom')->alert('Alert: action must be taken immediately!');
        Log::channel('custom')->critical('Critical: critical conditions      !');
        log::channel('custom')->error('Error: error conditions!');
        log::channel('custom')->warning('Warinig: worning conditions!');
        log::channel('custom')->notice('Notice:normal but significant codition!');
        log::channel('custom')->info('Informational: informational messages!');
        log::channel('custom')->debug('Debug: debug-level message!');


        log::channel('daily')->emergency('Emergency: System is unusable!');
        log::channel('daily')->alert('Alert: action must be taken immediately!');
        Log::channel('daily')->critical('Critical: critical conditions      !');
        log::channel('daily')->error('Error: error conditions!');
        log::channel('daily')->warning('Warinig: worning conditions!');
        log::channel('daily')->notice('Notice:normal but significant codition!');
        log::channel('daily')->info('Informational: informational messages!');
        log::channel('daily')->debug('Debug: debug-level message!');


        return 'Loge have been written!';
    }


    public function builtInDirectivesDemo(){
        $data=[
            'name'=>'Ahmad khan shahab',
            'inVisible'=> true,
            'loggedIn'=> false,
            'countryCode'=>'IN',
            'workExperience'=>15,
            'stateCode'=>null
        ];
        return view('builtindirectivesdemo',['data'=>$data]);
    }





}
