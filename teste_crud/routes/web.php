<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('desenvolvedores');
});

Route::get('/developers', 'DesenvolvedorController@index');

Route::get('/developers?={search}', 'DesenvolvedorController@searchDevelopers');

Route::get('/developers/{id}', 'DesenvolvedorController@getDeveloper');

Route::post('/developers', 'DesenvolvedorController@store');

Route::put('/developers/{id}', 'DesenvolvedorController@update');

Route::delete('/developers/{id}', 'DesenvolvedorController@destroy');
