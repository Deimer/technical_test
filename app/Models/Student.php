<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
	protected $table = 'students';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'identification',
		'first_name',
		'last_name',
		'gender',
		'course_id',
	];

	public function course() {
		return $this->belongsTo('App\Models\Course');
	}

}
