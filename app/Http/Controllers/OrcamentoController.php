<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\orcamento;
use Illuminate\Support\Facades\Mail;

class OrcamentoController extends Controller
{
    public function orcamento()
    {
        Mail::to('marciogspaula@gmail.com')->send(new orcamento());
        return redirect()->route('solicitar');
    }
}
