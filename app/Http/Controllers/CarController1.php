<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function testCar(){
        return view ('addCar');
    }

    public function recieved(Request $request)
    {
        return "Car Title is  ". $request->title;
    }


}
