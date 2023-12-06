<?php

namespace App\Http\Controllers;
use App\Traits\Common;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    use Common;
    public function test1(){
        return view("login");
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
}
