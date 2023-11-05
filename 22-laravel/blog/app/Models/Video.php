<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    
    /**
     * realcion uno a muchos inversa
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
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
