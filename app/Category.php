<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Post;
class Category extends Model
{
    //
    protected $fillalble = ['category_id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
