<?php

class Post extends BaseModel {

	protected $table = 'posts';

	/**
	* Define relationship to user (author)
	*/

	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Validation rules
	 */

	public static $rules = array(
		'title' => 'required|max:100',
		'body' => 'required|max:10000'
	);

	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone(Config::get('app.localTimezone'));
	}
}

