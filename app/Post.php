<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Category;
// use App\User;

class Post extends Model
{
    protected $fillalbe = ['title', 'excerpt'];
    protected $with = ['category', 'author'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    //
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(fn ($query) => $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'));
        });
        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))
        );
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
        );
    }
}
