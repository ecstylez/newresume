<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\Form;

use Session;

class FormController extends Controller
{
	public function sendEmail (Form $request)
	{
		\Mail::send('emails.contact',
		array(
			'name'         => $request->get('name'),
			'email'        => $request->get('email'),
			'user_message' => $request->get('comments_and_questions')
		), function($message) use ($request)
		{
			$message->from($request->get('email'));
			$message->to('admin@mark-eccleston-software-engineer.com', 'Mark Eccleston')->subject('Mark-Eccleston.com - form submission');
		});

		Session::flash('success', 'Thank you for submitting! I\'ll get back to you as soon as I can!');

    	return \Redirect::back();
	}
}
