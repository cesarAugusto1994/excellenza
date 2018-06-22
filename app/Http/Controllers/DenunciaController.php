<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\Denuncia\Anexos as DenunciaAnexos;
use App\Mail\Denuncia as DenunciaMail;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paginas/denuncia');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();

        //dd($data);

        $denuncia = Denuncia::create($request->all());

        if ($request->hasFile('arquivos') && $request->arquivos->isValid()) {

            $pathTmp = $request->arquivos->path();
            $extension = $request->arquivos->extension();
            $path = $request->arquivos->store('arquivos');

            $anexo = new DenunciaAnexos();
            $anexo->link = $path;
            $anexo->denuncia_id = $denuncia->id;
            $anexo->save();
        }

        flash('Dados enviados com sucesso!')->success()->important();

        $prod = "adm.judicial@excellenza.com.br";

        @\Mail::to($prod)->queue(new DenunciaMail($denuncia));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
