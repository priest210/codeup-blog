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

Route::get('orm-test', function() {
	$posts = Post::all();
	foreach ($posts as $post) {
		echo $post->title . '<br>';
	}
});

Route::get('post-test', function() {
	$post = Post::find(2);

});


Route::resource('posts', 'PostsController');

Route::get('post', 'PostsController');

Route::get('/', 'HomeController@showResume');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/index', 'HomeController@showBlog');







