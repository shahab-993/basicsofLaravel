<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    //
    protected $table=false;
    protected $fillable=['name','country','sport'];
}
