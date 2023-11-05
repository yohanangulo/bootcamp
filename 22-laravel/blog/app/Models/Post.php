<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * relacion uno a muchos inversa
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Moders\Categoria');
    }

    /**
     * relacion uno a uno polimorfica
     */
    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
        
    }

    /**
     * relacion uno a muchos polimorfica
     */
    public function commens() {
        return $this->morphMany('App\Models\Comments', 'commentable');
    }

    /**
     * Relacion muchos a muchos polimorficas
     */
    public function tags() {
        return $this->morphedByMany('App\Models\Tag', 'taggable');
    }
}
