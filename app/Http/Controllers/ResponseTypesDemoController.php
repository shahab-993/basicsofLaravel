<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;
use Symfony\Component\CssSelector\Node\FunctionNode;

class ResponseTypesDemoController extends Controller
{
   public function showProducts(){
    return response()->json([
        'ProductCode'=>101,
        'ProdutName'=>'Printer',
        'Cost'=>1500,
    ]);
   }
   public function wishUser(string $message):View {
    return view('responsetypes.wishuser',['message'=>$message ]);
   }
   public Function gotoURL() :RedirectResponse {
    return redirect()->away('https://www.google.com');
   }
   public Function gotoURLPermanently() :RedirectResponse {
    return redirect()->away('https://www.google.com',301);
   }
   public Function gotoContactsAction() :RedirectResponse {
    return redirect()->action([self::class,'wishUser'],['message'=>'Coming from another action! ']);
   }
   public Function gotowishUserByRouteName(string $message) :RedirectResponse {
    return redirect()->route('responsetypes.wishuser',['message'=>$message]);
   }

   public Function downloadFile( ) :BinaryFileResponse {
    return response()->download(public_path('js/script.js'),'newscript.js');

   }
   public Function showImage( ) :SymfonyResponse {
    return response()->file(public_path('image/a.jpg'));

   }
   public Function downloadXML() :SymfonyResponse {
    $content = Storage::get('/data/book.xml');
    return response($content,200,['Content-Type'=>'text/xml']);
   }

}
