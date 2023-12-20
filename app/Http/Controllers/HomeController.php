<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use App\Mail\MyTestEmail;

use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function postEmail()
    {

        $userName = 'Sara Mohamed'; // Replace with actual user name
        $userEmail='soo@gmail.com';
        $message='hello soo';
        Mail::to('sara@example.com')->send(new DemoMail($userName,$userEmail,$message));
        return 'message sent';
    }
}
