<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
	protected $table = 'teachers';

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
	];

	public function courses() {
		return $this->hasMany('App\Models\Course');
	}

}
