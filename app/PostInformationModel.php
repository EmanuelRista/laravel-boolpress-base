<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostInformationModel extends Model
{
    protected $table = "posts_information";

    public function getPost(){
        return $this->belongsTo("App\PostModel");
    }
}
