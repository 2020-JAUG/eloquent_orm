<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    /** @var string */
    protected $table = 'categories';

    /**
     * /Una categoria tiene muchos posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category', 'id');
    }

    /**
     * Una categoria tiene muchos videos
     *
     * @return void
     */
    public function videos()
    {
        return $this->hasMany(Videos::class, 'category', 'id');
    }
}
