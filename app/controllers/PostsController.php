<?php

class PostsController extends \BaseController {

	public function __construct() {

		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}


	public function index()
	{	
		$search =Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');	
		if (is_null($search))
		{
			$posts = $query->paginate(3);
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(3);
		}
		return View::make('posts.index')->with(array('posts' => $posts));
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
		    	Session::flash('errorMessage', 'Apparently there seems to be an error');
		        return Redirect::action('PostsController@create')->withInput()->withErrors($validator);
		    }
		    else {
				// save to DB
				Log::info(Input::all());
			 	$post = new Post();
			 	$post->user_id = Auth::user()->id;
				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->save();

				Session::flash('successMessage', "Your post " . input::get('title') . " has succesfully been saved");
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