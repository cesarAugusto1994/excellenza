<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        return view('paginas/contato');
    }

    public function store(Request $request)
    {
        $contato = Contato::create($request->all());
        flash('Dados enviados com sucesso!')->success()->important();

        return redirect()->back();
    }
}
