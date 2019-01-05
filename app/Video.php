<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'videos';

    public function categories()
    {
        return $this->belongsToMany('App\Categorie', 'categorie_video', 'video_id', 'categorie_id');
    }

    public function cat_video()
    {
        return $this->belongsToMany('App\Categorie', 'categorie_video', 'video_id', 'categorie_id');
    }

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
