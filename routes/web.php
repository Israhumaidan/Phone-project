<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $phone=[
        ['Type'=>'IPhone', 'Price'=>'5000','Color'=>'gold'],
        ['Type'=>'Samsung', 'Price'=>'3000','Color'=>'Purple'],
        ['Type'=>'Nokia', 'Price'=>'1500','Color'=>'Black']
 
    ];
     
      return view('phonedetails', ["phone"=>$phone]);
 
 })->name('phonedetails');


Route::get('/test', function () {

    return view('test');

})->name('test');


Route::get('/phone', function () {

    
    return view('phone');
});

Route::get('/phonedisplay', function () {
   $phone=[
       ['Type'=>'IPhone', 'Price'=>'5000','Color'=>'gold'],
       ['Type'=>'Samsung', 'Price'=>'3000','Color'=>'Purple'],
       ['Type'=>'Nokia', 'Price'=>'1500','Color'=>'Black']

   ];
    
     return view('phonedetails', $phone);

})->name('phonedetails');

Route::get('/old', function () {

    
    return view('old/oldphone');

})->name('oldphone');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
