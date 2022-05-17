<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "_category_";
    protected $fillable = ["img", "name","category"];
}
