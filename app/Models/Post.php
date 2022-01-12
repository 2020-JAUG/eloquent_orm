<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'posts';

    /**
     * Un posts pertenece a un user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    /**
     * Un posts pertenece a una categoria
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    /*=============== MÉTODOS POLIMORFICOS ==================*/
    /**
     * Un posts puede tener muchos comentarios
     *
     * @return void
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Un post puede tener una imagen
     *
     * @return void
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * POLIMORFISMO PERTENECE A MUCHOS
     * Un posts puede tener muchas etiquetas
     *
     * @return void
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
