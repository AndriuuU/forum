<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'prueba2_modelos';


    protected $fillable = ['id','name','description']; // campos rellenables


}
