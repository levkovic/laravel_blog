<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getContact(){
		return view('pages.contact');
	}

}