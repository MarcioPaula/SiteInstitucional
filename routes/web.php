<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrcamentoController;
use Illuminate\Http\Request;

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


Route::get('/test', function(Request $req)
{
    $dados = $req->all();
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class, ['settings' => ]);
    $beautymail->send('emails.contato', compact('dados'), function($message) use ($dados)
    {
        $message
            ->from('orcamento@vortexsites.com.br','')
            ->to('orcamento@vortexsites.com.br', 'John Smith')
            ->subject('Nova solicitação de orçamento');
    });
    return view('solicitar');
})->name('email');
