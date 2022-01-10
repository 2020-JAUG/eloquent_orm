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
        return $this->hasMany(User::class, 'level', 'id');
    }
}
