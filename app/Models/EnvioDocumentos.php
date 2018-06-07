<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnvioDocumentos extends Model
{
    protected $fillable = ['nome', 'cpf', 'nome_devedor', 'cpf_devedor',
    'num_processo', 'email_credor', 'telefone_credor', 'tipo_arquivo', 'mensagem'];

    public function arquivo()
    {
        return $this->hasOne(EnvioDocumentosAnexos::class, 'envio_documento_id');
    }
}
