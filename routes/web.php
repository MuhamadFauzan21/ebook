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

Route::get('coba', function () {
    return "Konichiwaaaaa :o";
});

Route::get
Route::get('coba 2', function(){
    return [
        'Nama' => 'Muhamad Fauzan',
        'Kelas' => 'XII RPL 4',
        'Nis' => '3103120137'
    ];
});

Route::get('coba 3', function(){
    return [
        'Nama' => 'Muhamad Fauzan',
        'Kelas' => 'XII RPL 4',
        'Nis' => '3103120137'
    ];
});