<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'comments';

    /**
     * Método polimorfismo uno a uno
     * (ESTA MANERA DE DECLARAR UNO A UNO EN POLIMORFISMO, TAMBIÉN SE APLICA PARA UNO A MUCHOS EN POLIMORFISMO)
     *
     * @return void
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Un comentario pertenece a un user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
