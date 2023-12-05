<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

