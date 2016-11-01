<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller{

	//method @getIndex for route '/' 
	public function getIndex(){
		//4 latest posts
		//firstly ordered by 'created_at', order-descending
		//then paginate(4) used to grab first 4 posts
		$posts = Post::orderBy('created_at', 'desc')->paginate(4);

		return view('pages.welcome')->withPosts($posts);
	}

	//method @getApout for route 'about'
	public function getAbout(){
		return view('pages.about');
	}

	//method @getContact for route 'contact'
	public function getContact(){
		return view('pages.contact');
	}

	//post method for route 'contact'
	//$request contains all posted data
	public function postContact(Request $request){

		//server side validation
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'body' => 'min:10'
			]);

		//data for email
		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);
		
		//Email sending function
		//'emails.contact' - view for email
		//array $date date for view
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('admin@admin.com');
			$message->subject($data['subject']);
		});

		//alert
		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}

}