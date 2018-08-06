<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'tag'
    ];

    public function posts(){
        // un Tag pertenece a muchos post
        // el nombre de la clase osea "post" db ser en plural
        return $this->belongsToMany(Post::class);
    }

}
