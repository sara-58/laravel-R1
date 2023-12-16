<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarController2;
use App\Http\Controllers\NewsController;


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
//============= Public Page ===============
Route::get('/', function () {
    return view('welcome');
});
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
// Route::prefix('product')->group(function(){
//     Route::get('/',function(){
//         return 'Products home Page .';
//     });
//     Route::get('laptop',function(){
//         return 'Laptop home Page .';
//     });
//     Route::get('camera',function(){
//         return 'Camera home Page .';
//     });
//     Route::get('projector',function(){
//         return 'Projectors home Page .';
//     });
// });

//==============Web Structure========================
// Route::get('about', function () {
//     return 'More about our website .';
// });
// Route::get('contact', function () {
//     return 'How can we help you ? ';
// });
// Route::prefix('support')->group(function () {
//     Route::get('/', function () {
//         return 'Welcome to Our Support Page .';
//     });
//     Route::get('chat', function () {
//         return 'Welcome to chat Page .';
//     });
//     Route::get('call', function () {
//         return 'Welcome to call Page .';
//     });
//     Route::get('ticket/{name?}/{num?}', function ($name, $num = 0) {
//         $msg = 'Weclome ' . $name;
//         if ($num > 0) {
//             return $msg . ' <br>You have reserved ' . $num . ' ticket';
//         }
//         return $msg;
//     });
// });
// Route::prefix('training')->group(function () {
//     Route::get('/', function () {
//         return 'Welcome to The Training Page .';
//     });
//     Route::get('hr', function () {
//         return 'Welcome to HR Training Page .';
//     });
//     Route::get('ict', function () {
//         return 'Welcome to ICT Training Page .';
//     });
//     Route::get('marketing', function () {
//         return 'Welcome to Marketing Training Page .';
//     });
//     Route::get('logistics', function () {
//         return 'Welcome to Logistics Training Page .';
//     });
// });
//=========================================
// Route::prefix('product')->group(function () {
//     Route::get('/', function () {
//         return 'Products home Page .';
//     });
//     Route::get('laptop', function () {
//         return 'Laptop home Page .';
//     });
//     Route::get('camera', function () {
//         return 'Camera home Page .';
//     });
//     Route::get('projector', function () {
//         return 'Projectors home Page .';
//     });
// });
//===========fallback ===== to redirect to homepage lw feh error =========
// Route::fallback(function () {
//     return redirect('/');
// });
//=========================================
// Route::get('cv', function () {
//     return view('cv');
// });

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('recieve', function () {
//     return 'Data recieved';
// })->name('recieve');

//===========================
// Route::get('login', function () {
//     return view('login');
// });

// Route::post('recieve', function () {
//     return 'Data recieved';
// })->name('recieve');

// Route::get('test1', [ExampleController::class, 'test1']);
//================================================

// Route::get('addCar', function () {
//     return view ('addCar');
// });

// Route::post('carAdded', function () {
//     return 'Car Added Successfully (^_^) ';
// })->name('carAdded');

// Route::get('testCar',[CarController1::class,'testCar']);

//=============================
// web.php:=>

// Route::get('login',[ExampleController::class,'login]);
// Route::post('recieve',[ExampleController::class,'recieved])->name('recieve');
// ------------------------------------------------------

// Route::get('carShow', [CarController2::class, 'create']);
//  Route::post('Cars',[CarController2::class, 'store'])->name('Cars');
//===============================================

Route::get('addNews', [NewsController::class, 'create']);
Route::post('News', [NewsController::class, 'store'])->name('News');
Route::get('posts', [NewsController::class, 'index']);
Route::get('trashedPosts', [NewsController::class, 'trashed']);
Route::get('editPost/{id}', [NewsController::class, 'edit']);
Route::get('postDetail/{id}', [NewsController::class, 'show'])->name('postDetail');
Route::get('deletePost/{id}', [NewsController::class, 'destroy'])->name('deletePost');
Route::put('updatePost/{id}', [NewsController::class, 'update'])->name('updatePost');
Route::get('restorePost/{id}', [NewsController::class, 'restore'])->name('restorePost');
Route::get('forceDeletePost/{id}', [NewsController::class, 'forceDelete'])->name('forceDeletePost');

//----------------------------------------------------
Route::get('addCar', [CarController2::class, 'create']);
Route::post('Cars', [CarController2::class, 'store'])->name('storeCar');
Route::get('cars', [CarController2::class, 'index']);
Route::get('trashed', [CarController2::class, 'trashed']);
Route::get('editCar/{id}', [CarController2::class, 'edit']);
Route::get('carDetail/{id}', [CarController2::class, 'show'])->name('carDetail');
Route::get('deleteCar/{id}', [CarController2::class, 'destroy'])->name('deleteCar');
Route::put('updateCar/{id}', [CarController2::class, 'update'])->name('updateCar');
Route::get('restore/{id}', [CarController2::class, 'restore'])->name('restore');
Route::get('forceDelete/{id}', [CarController2::class, 'forceDelete'])->name('forceDelete');

//-------------------------------------------------
Route::get('showUpload',[ExampleController::class,'showUpload']);
Route::post('upload',[ExampleController::class, 'upload'])->name('image');

//------------------------------------

Route::get('place', [ExampleController::class, 'place']);
Route::get('blog1', [ExampleController::class, 'blog1']);
Route::get('blog', [ExampleController::class, 'blog']);
//===================================================

