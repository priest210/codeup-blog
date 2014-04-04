<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public static $rules = array(
		'first_name' => 'required|max:25',
		'last_name' => 'required|max:25',
		'email' => 'required|email|unique:users',
		'password' => 'required|min:25',
	);

	const ROLE_ADMIN = 1;
	const ROLE_USER = 2;

	public static $ROLES = array(
	     array(‘id’ => 1, ’name’ => ‘Administrator’),
	     array(‘id’ => 2, ’name’ => ’User’)
	); 


	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Relationship for many posts.
	 */

	public function posts()
	{
		return $this-hasMany('Post');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	
	public function getReminderEmail()
	{
		return $this->email;
	}

	/*public function setPassword() {

	}
	*/

	public function canManagePost ($post)
	{
		return $this->isAdmin() || $this->id == $post->user_id;
	}


	public function isAdmin() {
		return $this->role_id == Self::ROLE_ADMIN;
	}

	public function allowedToMangePost($posts)
	{
			return $this->id == $posts->user_id;
	}


}






