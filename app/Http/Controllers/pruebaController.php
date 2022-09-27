<?php 

namespace App\Http\Controllers;

class pruebaController extends Controller
{
    public function name($n){
        return "Hola ".$n;
    }
}