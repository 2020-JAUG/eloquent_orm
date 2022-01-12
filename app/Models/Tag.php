<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'tags';

    /**
     * POLIMORFISMO MUCHOS A MUCHOS
     * Una tag puede tener muchas posts
     * (Transformado para muchos)
     *
     * @return void
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Una tag puede tener muchos posts
     *
     * @return void
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
