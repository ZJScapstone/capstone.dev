<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome()
	{
		return View::make('main');
	}

	public function doContact(){

		$from    = Input::get('from');
		$email   = Input::get('email');
		$subject = Input::get('subject');
		$body    = Input::get('body');

		$data = [
			'from'    => $from,
			'email'   => $email,
			'subject' => $subject,
			'body'    => $body
		];

		Mail::send('emails.contact', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['from']);

			$message->to('sjmrstevens@gmail.com', '');
		});

	}
}
