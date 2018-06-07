<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnvioDocumentos;
use App\Models\EnvioDocumentosAnexos;
use App\Http\Requests\EnviarDocumentosFormulario;
use App\Mail\EnvioDocumentos as EnvioDocumentosMail;

class EnvioDocumentosController extends Controller
{
    public function index()
    {
        return view('paginas/envio-documentos');
    }

    public function send(EnviarDocumentosFormulario $request)
    {
        $envio = EnvioDocumentos::create($request->all());

        if ($request->hasFile('arquivos') && $request->arquivos->isValid()) {

            $pathTmp = $request->arquivos->path();
            $extension = $request->arquivos->extension();
            $path = $request->arquivos->store('arquivos');

            $documento = new EnvioDocumentosAnexos();
            $documento->link = $path;
            $documento->envio_documento_id = $envio->id;
            $documento->save();
        }

        flash('Dados enviados com sucesso!')->success()->important();

        \Mail::to('cezzaar@gmail.com')->queue(new EnvioDocumentosMail($envio));

        return redirect()->back();

    }
}
