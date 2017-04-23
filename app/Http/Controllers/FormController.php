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
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => 'https://www.google.com/recaptcha/api/siteverify',
			CURLOPT_POST           => 1,
			CURLOPT_POSTFIELDS     => array(
				'secret'   => $_ENV['RE_CAP_SECRET'],
				'response' => $request->get('g-recaptcha-response'),
			),
		));

		$response = json_decode(curl_exec($curl));

		if ($response->success) {
			\Mail::send('emails.contact',
			array(
				'name'         => $request->get('name'),
				'email'        => $request->get('email'),
				'user_message' => $request->get('comments_and_questions')
			), function($message) use ($request)
			{
				$message->from('admin@mecorp.a2hosted.com');
				$message->to('m.ecstylez@gmail.com', 'Mark Eccleston')->subject('Mark-Eccleston.com - form submission');
			});

			Session::flash('success', 'Thank you for submitting! I\'ll get back to you as soon as I can!');
		} else {
			Session::flash('error', 'Something went wrong. Please try again.');
		}

    	return \Redirect::back();
	}
}
