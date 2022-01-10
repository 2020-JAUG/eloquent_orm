<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /** @var string */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Un usuario tiene un perfil
     * Undocumented function
     *
     * @return void
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user', 'id');
    }

    /**
     * Un usuario pertenece a un nivel
     *
     * @return void
     */
    public function level()
    {
        return $this->belongsTo(Level::class, 'level', 'id');
    }

    /**
     * Un usuario pertenece a un grupo y puede tener muchos grupos
     * El timestamps es para que no se queden los campos vacios de la fecha de creación en la tabla group_user
     * @return void
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}
