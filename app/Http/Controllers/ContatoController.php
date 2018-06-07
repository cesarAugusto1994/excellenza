<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Mail\Contato as ContatoMail;

class ContatoController extends Controller
{
    public function index()
    {
        return view('paginas/contato');
    }

    public function store(Request $request)
    {
        $contato = Contato::create($request->all());

        \Mail::to('adm.judicial@excellenza.com.br')->queue(new ContatoMail($contato));

        flash('Dados enviados com sucesso!')->success()->important();

        return redirect()->back();
    }
}
