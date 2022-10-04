<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function show(Post $post)  // Con esto estamos inyectando el Post completo
	{
		$replies = $post->replies()->with('autor')->paginate(2);
		
		return view('posts.detail', compact('post','replies'));
	}


}
