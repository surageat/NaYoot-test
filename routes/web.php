<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/programe',function (){
    return view('listtest');
});


//listnumber โปรแกรมข้อที่3
Route::get('/number','NumberController@index');
// เพิ่มชื่อ
Route::post('addnumber','NumberController@store');
//แสดงรายชื่อ
Route::get('listnumber' ,'NumberController@create');
//delete
Route::delete('deletenumber/{id}','NumberController@destroy');
Route::resource('allnumber','NumberController');


//ข้อ2
Route::resource('change','ChangeController');
Route::post('/changmoney','ChangeController@create');

//ข้อ3 
Route::get('/calculate','CalculateController@index');
//คำนวน
Route::post('addcalculate','CalculateController@store');

});