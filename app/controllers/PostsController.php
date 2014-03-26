<?php

class PostsController extends \BaseController {


	public function index()
	{
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}


	public function create()
	{
		return View::make('posts.create');
	}


	public function store()
	{	
		Log::info(Input::all());
	 	$post = new Post();
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		return Redirect::action('PostsController@index');
	}


	public function show($id)
	{
		$posts = Post::findOrFail($id);
		return View::make('posts.show')->with('posts', $posts);
	}

	
	public function edit($id)
	{
		return "Show a form for editing a specific post";
	}

	
	public function update($id)
	{
		return "Update a specific post";
	}

	
	public function destroy($id)
	{
		return "Delete a specific post";
	}

}