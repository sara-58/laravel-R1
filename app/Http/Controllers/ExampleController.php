<?php

namespace App\Http\Controllers;
use App\Traits\Common;
use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ExampleController extends Controller
{
    use Common;
    public function test1(){
        return view("login");
    }
    public function create()
    {
    //
    }
    public function showUpload(){
        return view('upload');
    }
    // public function upload(Request $request)
    // {
    //     return dd($request->image);
    // }
    public function upload(Request $request)
    {
        // $file_extension = $request->image->getClientOriginalExtension();
        // $file_name = time().'.'. $file_extension;
        // $path = 'assets/images';
        // $request->image->move($path,$file_name);
        // return 'Uploaded';
        $h = $this->uploadFile($request->image ,'assets/images');
        return $h ;
    }

    public function place()
    {
        return view('place');
    }
    public function blog1()
    {
        return view('blog1');
    }
    public function blog()
    {
        return view('blog');
    }

    public function mySession()
    {
        session()->put('test','First laravel session');

        $data = session('test');

        return view('session',compact('data'));
    }

    public function myTemplate()
    {
        return view('myTemplate');
    }

    public function contact()
    {
        return view('contact');
    }

    public function receiveContact(Request $request)
    {
        $content = [
            'userName' => $request->userName,
            'userEmail' => $request->userEmail,
            'message' => $request->message,
        ];

        Mail::to('sara@example.com')->send(new ContactMail($content));

        return "mail sent!";
    }
    
}
