<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'profiles';

    /**
     * Un perfil tiene una localización
     *
     * @return void
     */
    public function location()
    {
        return $this->hasOne(Location::class, 'profile', 'id');
    }
}
