<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable = [

        'title', 'contenido', 'category_id','featured','slug','user_id',
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }


    protected $dates  = ['deleted_at'];

    // un post solo puede pertenecer a una sola categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        //Tag  pertenece a muchas categorias
        // el nombre de la clase osea tags db ser en plural
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
