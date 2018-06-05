<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog';
    protected $dates = ['data'];

    public function categ()
    {
        return $this->belongsTo(Categoria::class, 'categoria');
    }
}
