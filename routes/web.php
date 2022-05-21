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
    return view('welcome');
});
Route::get('/Employees', 'App\Http\Controllers\EmployeeController@index');
Route::get('/Employees/create', 'App\Http\Controllers\EmployeeController@create');
Route::post('/Employees/store', 'App\Http\Controllers\EmployeeController@store');
Route::get('/Employees/{id}', 'App\Http\Controllers\EmployeeController@show');
Route::get('/Employees/edit/{id}', 'App\Http\Controllers\EmployeeController@edit');
Route::put('/Employees/{id}', 'App\Http\Controllers\EmployeeController@update');
Route::get('/Employees/delete/{id}', 'App\Http\Controllers\EmployeeController@destroy');
Route::get('/Employee/{mm}/{dd}/{yyyy}', 'App\Http\Controllers\EmployeeController@searchbybirthday');