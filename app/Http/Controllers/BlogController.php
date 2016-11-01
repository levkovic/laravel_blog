<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
	//method @getIndex for route 'blog'
	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->paginate(10);

		return view('blog.index')->withPosts($posts);
	}

	//method @getSingle for route 'blog/{slug}'
    public function getSingle($slug){
    	//'slug' - column name; '=' - condition
    	//first() - get first that meets requirments
    	$post = Post::where('slug', '=', $slug)->first();

    	return view('blog.single')->withPost($post);
    }
}
