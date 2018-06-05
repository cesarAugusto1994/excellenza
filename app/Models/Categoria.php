<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias_blog';

    public function posts()
    {
        return $this->hasMany(Post::class, 'categoria');
    }
}
