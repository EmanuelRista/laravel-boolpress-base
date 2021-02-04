<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = "posts";

    public function getInformation(){
        return $this->hasOne("App\PostInformationModel","post_id", "id");
    }

    public function getCategory(){
        return $this->belongsTo("App\CategoryModel","category_id");
    }




    
}


