<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'levels';

    /**
     * Un nivel tiene muchos usuarios
     *
     * @return void
     */
    public function users()
    {
        return $this->hasMany(User::class, 'level_id', 'id');
    }

    /**
     * OPTIMIZANDO LA CONSULTA
     * Un nivel tiene post a travéz de user
     * Para consultar a los user, filtrar por un nivel y traer sus posts
     * @return void
     */
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }

    /**
     * Un nivel tiene muchos vídeos a travéz de user
     * OPTIMIZANDO LA CONSULTA
     * @return void
     */
    public function videos()
    {
        return $this->hasManyThrough(Video::class, User::class);
    }
}
