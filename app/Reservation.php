<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "_reservations_";
    protected $fillable = ["name", "email","phone","date","time","of_people","message"];
}
