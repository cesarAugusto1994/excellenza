<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Denuncia\Anexos;

class Denuncia extends Model
{
    protected $table = 'denuncia';

    protected $fillable = ['mensagem'];

    public function arquivo()
    {
        return $this->hasOne(Anexos::class, 'denuncia_id');
    }
}
