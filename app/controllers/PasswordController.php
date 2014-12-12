<?php
class PasswordController extends BaseController {
	public function __construct() {
        	$this->beforeFilter('csrf', array('on' => 'post'));
        }
 
  public function remind()
  {
    return View::make('remind');
  }
public function request()
{
  $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
 
  Password::remind($credentials);
  Session::flash('message', 'If the email provided is a valid user, then you will recevie an email with instructions for resetting your password shortly.');
		return Redirect::to('/');
}

public function reset($token)
{
  return View::make('reset')->with('token', $token);
}
public function update()
{
	$rules = array(
    	'password' => 'min:8'   
		);          

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

    	return Redirect::to('password/reset/{token}')
        ->with('message', 'Reset failed; please fix the errors listed below.')
        ->withInput()
        ->withErrors($validator);
    }
  $credentials = array('email' => Input::get('email'), 'token' => Input::get('token'), 'password' => Input::get('password'), 'password_confirmation' => Input::get('password_confirmation'));
 
  Password::reset($credentials, function($user, $password)
  {
    $user->password = Hash::make(Input::get('password'));
 
    $user->save();
 
	
  });
  Session::flash('message', 'Your password has been reset.'); 
    return Redirect::to('/user/login');
}

}