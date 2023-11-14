<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//======================================
// Route::get('test',function(){
//     return 'Welcome to my first route';
// });
//=====================================
// Route::get('user/{name}',function($name){
//     return 'The username is : '.$name ;
// });
//======================================
// Route::get('user/{name}/{age}',function($name,$age){
//     return 'The username is : '.$name.' <br>And the age is : '.$age ;
// });
//=======================================
// Route::get('user/{name}/{age?}',function($name,$age){
//     return 'The username is : '.$name.' <br>And the age is : '.$age ;
// });
//========================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     if($age == 0){
//         return 'The username is : '.$name;
//     }
//     else{
//     return 'The username is : '.$name.' <br>And the age is : '.$age ;
//     }
// });
//=====================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     if($age == 0){
//         return 'The username is : '.$name;
//     }
//     else{
//     return 'The username is : '.$name.' <br>And the age is : '.$age ;
//     }
// });
//===============================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age == 0){
//         return $msg;
//     }
//     else{
//     return $msg.' <br>And the age is : '.$age ;
//     }
// });
//=====================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->where(['age' => '[0-9]+']);
//=====================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->whereNumber('age');
//=========================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->whereAlpha('name');
//========================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
//================================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->whereIn('name',['Sara','Mohamed']);
//=========================================
// Route::get('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is :'.$name;
//     if($age > 0){
//     return $msg.' <br>And the age is : '.$age ;
//     }
//     return $msg;
// })->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
//============================================
// Route::get('product/laptop',function(){
//     return 'Laptop home Page .';
// });
// Route::get('product/camera',function(){
//     return 'Camera home Page .';
// });
//============Route Prefix=====================
Route::prefix('product')->group(function(){
    Route::get('/',function(){
        return 'Products home Page .';
    });
    Route::get('laptop',function(){
        return 'Laptop home Page .';
    });
    Route::get('camera',function(){
        return 'Camera home Page .';
    });
    Route::get('projector',function(){
        return 'Projectors home Page .';
    });
});
//======================================






