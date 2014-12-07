<?php

class UsersController extends BaseController {

	public function __construct() {
    $this->beforeFilter('csrf', array('on' => 'post'));
    }


	public function getIndex() {
	return View::make('home');
    }

    public function getSignup() {
	return View::make('user_signup');
    }

    public function getLogin() {
	return View::make('login');
    }

	public function postSignup() {
		$rules = array(
    	'email' => 'email|unique:users,email',
    	'password' => 'min:8'   
		);          

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

    	return Redirect::to('/user/signup')
        ->with('message', 'Sign up failed; please fix the errors listed below.')
        ->withInput()
        ->withErrors($validator);
}


		$user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/')->with('message', 'Welcome!');

    }

    public function postLogin() {
    	$credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    

    public function anyLogout() {
    	Auth::logout();

    	# Send them to the homepage
    	return Redirect::to('/');
    }

}
