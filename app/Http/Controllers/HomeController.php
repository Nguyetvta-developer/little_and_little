<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\Orders;
use App\Models\Events;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class HomeController extends Controller
{


    public function index()
    {
        $event=Events::all();
        return view('home',compact('event'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function sendMail(Request $data){
        Mail::send('mailContent',[
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'feed' => $data['feed'],
            
        ],function($mail) use ($data){
            $mail->to('nguyentruongvi2203@gmail.com');
            $mail->from('nguyentruongvi2203@gmail.com');
            $mail->subject('Liên hệ từ khách hàng');
        });
        return view('done');
    }

   
  
}