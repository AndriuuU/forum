<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Forum;


class ForumController extends Controller
{
    public function index (){
       $forums = Forum::latest()->paginate(5); //Crear paginacion 
      
       //dd($forums);
       
        
        return view('forums/index', compact('forums'));
    }
    //php artisan make:model Post -mcf

    public function show(Forum $forum)  // Con esto estamos inyectando el Foro completo
    {
        $forums = Forum::with(['replies', 'posts'])->paginate(5);
        //$posts = $forum->posts()->with(['owner'])->paginate(10);
        //$forums = Forum::with(['posts'])->paginate(5);
        //$forums = Forum::with(['replies', 'posts'])->paginate(5);
        
        //$forums = Forum::with(['replies', 'posts'])->paginate(5);
        //$forum = &forum->posts()->with(['owner'])->paginate(2);
        dd($forum);
        return view('forums.detail', compact('forum',));
    }
    
}


