<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Main pages
Route::get('/', 'HomeController@showWelcome');
Route::get('/regions', 'HomeController@showRegions');
Route::get('/races', 'HomeController@showRaces');
Route::get('/orders', 'HomeController@showOrders');
Route::get('/disciplines', 'HomeController@showDisciplines');
Route::get('/school', 'HomeController@showStudents');

// User signup and login
Route::controller('user', 'UsersController');

Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'remind'
));
Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as' => 'request'
));
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'reset'
));
Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'update'
));
          

Route::model('character', 'Character');

// Show Character pages.
Route::get('/characters', 'CharacterController@index');
Route::get('/character/{id}', 'CharacterController@show');
Route::get('/create', 'CharacterController@create');
Route::get('/edit/{id}', 'CharacterController@edit');
Route::get('/delete/{id}', 'CharacterController@destroy');

// Handle form submissions.
Route::post('/create', 'CharacterController@store');
Route::post('/edit/{id}', 'CharacterController@update');
Route::post('/delete', 'CharacterController@destroy');

// Test Routes
Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});
Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('/debug', function() {

    

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    

});