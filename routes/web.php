<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrcamentoController;

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
    return view('home');
});

Route::get('/Solicitar', function () {
    return view('solicitar');
})->name('solicitar');

Route::get('/Solicitar/email', function (){

    $user = new stdClass();
    $user->name = 'Márcio';
    $user->email = 'marciogspaula@gmail.com';
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\orcamento($user));


})->name('email');
