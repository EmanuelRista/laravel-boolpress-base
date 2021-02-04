<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
     protected $table = "categories";

     public function getPosts(){
          return $this->hasMany("App\PostModel", "category_id");
     }
}
