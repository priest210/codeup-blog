<?php

class PostsController extends \BaseController {

	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	public function create()
	{
		return View::make('posts.create-edit')->with('post', new Post());
	}

	public function store()
	{	

		    // create the validator
		    $validator = Validator::make(Input::all(), Post::$rules);

		    // attempt validation
		    if ($validator->fails())
		    {
		        return Redirect::back()->withInput()->withErrors($validator);
		    }
		    else {
				// save to DB
				Log::info(Input::all());
			 	$post = new Post();
				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->save();
				return Redirect::action('PostsController@index');
			}
	}


	public function show($id)
	{
		$posts = Post::findOrFail($id);
		return View::make('posts.show')->with('posts', $posts);
	}

	
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	
	public function update($id)
	{
			$post = Post::findOrFail($id);

		  	// create the validator
		    $validator = Validator::make(Input::all(), Post::$rules);

		    // attempt validation
		    if ($validator->fails())
		    {
		        return Redirect::back()->withInput()->withErrors($validator);
		    }
		    else {
				// save to DB
				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->save();
				return Redirect::action('PostsController@index');
			}
	}

	
	public function destroy($id)
	{
		return "Delete a specific post";
	}

}