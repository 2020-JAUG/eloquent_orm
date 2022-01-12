<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'videos';

    /**
     * Un vídeo pertenece a un user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    /**
     * Un vídeo pertenece a una categoria
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    /*=============== MÉTODOS POLIMÓRFICOS ==================*/
    /**
     * Un vídeo puede tener muchos comentarios
     *
     * @return void
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Un vídeo puede tener una imagen
     *
     * @return void
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * Un vídeo puede tener muchas etiquetas
     * Y una etiqueta puede tener muchos vídeos
     *
     * @return void
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
