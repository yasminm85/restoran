<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = "_menus_";
    protected $fillable = ["name_menu", "cost","stok","img"];
}
