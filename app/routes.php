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

Route::get('/', 'HomeController@showWelcome');
Route::get('/resume', 'HomeController@showResume');

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showResume');

Route::get('/ ', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', function($name) 
{
	$data = array(
		'name' => $name
	);
	return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess) {
	
	$roll = mt_rand(1, 6);

	if ($guess == $roll) {
		$result = "Great job your guess was correct!";

	}	else {
		$result = "Sorry wrong answer";
	}

	$data = array(
		'result' => $result, 
		'guess' => $guess, 
		'roll' => $roll
	);
	return View::make('roll-dice')->with($data);
});



