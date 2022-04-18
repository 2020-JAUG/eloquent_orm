<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'images';

    /**
     * UNO A UNO CON USANDO POLIMORFISMO. ESTÁ TABLA ES UNA TABLA POLIMORFICA
     * Con este método relaciono las siguientes tablas
     * (Transoformar Á) ---> Se usará con: user, vídeos, posts
     * @return void
     */


    /**
     * imageable
     *
     * @return reponse
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
