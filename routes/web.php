<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;


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
Route::get('/', function () {
    return view('welcome');
     });

// Route::fallback(function() {
//     return redirect ('/');
// });

// Route:: prefix('lar')->group(function(){

    //    Route::get('/', function () {
    //         return view('test');
    //           });
    

    

// Route::get('test',function(){
//     return 'Welcome to my first laravel website';
// });

// Route::get('test1/{number}',function($number){
//     return 'The number is:' . ' ' . $number;
// });

// // Route::get('test2/{id?}',function($id=0){
// //     return 'The id2 is:' . ' ' . $id;
// // })->where(['id'=>'[0-9]+']);

// Route::get('test2/{id?}',function($id=0){
//     return 'The id is: ' . $id;
// })->whereNumber('id');

// Route::get('test3/{name?}',function($name=null){
//     return 'The name is: ' . $name;
// })->whereAlpha('name');

// Route::get('test4/{age}/{name}',function($age, $name){
//     return 'The age is ' . $age . ' and the name is ' . $name;
// })->where(['age' => '[0-9]+' , 'name =>[a-zA-Z]+']);

// Route::get('product/{category}',function($cat){
//     return 'The category is ' . $cat ;
// })->whereIn('category' ,['laptop', 'pc', 'mobile']);
// });


// ////////////////////////////////////////////


// // Route::fallback(function(){
// //     return redirect ('/');
// // });

// Route::prefix('try')->group(function(){

//     Route::get('/', function(){
//         return view('food');
//     });

// Route::get('best', function(){
//     return 'Hello to my best';
// });

// Route::get('best1/{id}', function($id) {
//     return 'Your id is: ' . $id;
// });

// Route::get('best2/{id?}', function($id=0) {
//     return 'Your id is: ' . $id;
// });

// Route::get('best3/{id?}', function($id=0) {
//     return 'Your id is: ' .$id;
//     })->where(['id'=> '[0-9]+']);

// Route::get('best4/{id?}', function($id=0) {
//     return 'Your id is : ' . $id;
// })->whereNumber('id');

// Route::get('best5/{name?}', function($name=null) {
//     return 'Your name is: ' . $name;
// })->whereAlpha('name');

// Route::get('best6/{id}/{name}', function($id, $name) {
//     return 'Your age is ' . $id . ' and your name is ' . $name;
// }) ->where(['id' => '[0-9]+' , 'name' => '[a-zA-Z]+']);

// Route::get('product2/{category}' , function($category) {
//     return 'The category is '. $category;
// })->whereIn('category',['phone', 'earpods', 'pc' ]);

// });

// ////////////////////////////////////////////
// Task2:

// Route::get('About' , function(){
//     return 'Welcome';
// });

// Route::get('contactUs', function(){
//     return view ('contactUs');
// });

// Route::prefix('Blog')->group (function(){
   
//    Route::get('blog' , function(){
//     return view ('blog');
// });

//     Route::get('science' , function(){
//         return 'Ready to explore the world?';
//     });

//     Route::get('sports' , function(){
//         return 'Time for fitness';
//     });

//     Route::get('math' , function(){
//         return 'Even the hardest puzzles have a solution';
//     });

//     Route::get('medical' , function(){
//         return 'Make your health a priority';
//     });

// });

// Route::get('login', function(){
//     return view ('login');
// });

// Route::get('login', function(){
//     return view ('login');
// });

// Route::post('submit', function(){
//     return 'You are logged in';
// })->name('submit');

// Route::post('logged', function(){
//     return 'you are logged in';
// })->name('logged');

// Route::get('controller', [ExampleController::class,'show']);

// Route::get('control',[ExampleController::class,'show']);

// Task3:

Route::get('login', function(){
        return view ('login');
    });

Route::POST('/login', [ExampleController::class,'login'])->name('login');


//Day4
//store data into car table
// Route:: get('storeCar',[CarController::class,'store']);
// Route for the car table 'create'
Route:: get('createCar',[CarController::class,'create']);
Route:: get('Car',[CarController::class,'index']);
Route:: post('storeCar',[CarController::class,'store'])->name('storeCar');

//Task4 & 5
//Routes for "posts" table

Route:: get('createPost',[PostController::class,'create']);

Route:: post('storePost',[PostController::class,'store'])->name('storePost');

Route:: get('posts',[PostController::class,'index']);

Route:: get('showPost/{id}',[PostController::class,'show']);

Route:: get('updatePost/{id}',[PostController::class,'edit']);

Route:: put('updateP/{id}',[PostController::class,'update'])->name('updateP');

// Day5
Route:: get('updateCar/{id}',[CarController::class,'edit']);
Route:: get('showCar/{id}',[CarController::class,'show']);
Route:: put('update/{id}',[CarController::class,'update'])->name('update');


// Day6 Lecture:
Route:: get('deleteCar/{id}',[CarController::class,'destroy']);
Route:: get('trashed',[CarController::class,'trashed'])->name('trashed');
Route:: get('forceDelete/{id}',[CarController::class,'forceDelete'])->name('forceDelete');
Route:: get('restoreCar/{id}',[CarController::class,'restore'])->name('restoreCar');

//Task 6
Route:: get('deletePost/{id}',[PostController::class,'destroy']);
Route:: get('trashedposts',[PostController::class,'trashed'])->name('trashedposts');
Route:: get('forceDeletePost/{id}',[PostController::class,'forceDelete'])->name('forceDeletePost');
Route:: get('restorePost/{id}',[PostController::class,'restore'])->name('restorePost');