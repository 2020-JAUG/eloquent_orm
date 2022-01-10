<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'groups';

    /**
     * Un grupo tiene y pertenece a muchos usuarios
     * El timestamps es para que no se queden los campos vacios de la fecha de creación en la tabla group_user
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
