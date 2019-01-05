<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    protected $table = "categories";

    public function videos()
    {
        return $this->belongsToMany('App\Video', 'categorie_video', 'categorie_id', 'video_id');
    }
}
