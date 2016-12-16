<?php
namespace App\Http\Controllers;

Use App\Post;
Use Illuminate\Http\Request;

class PostController extends Controller
{
	public function postCreatePost(Request $request)
	{
		//Validation
		$post = new Post();
		$post->body = $request['body'];
		$request->user()->posts()->save($post);
		return redirect()->route('dashboard');
	}
}