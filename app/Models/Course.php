<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
	protected $table = 'courses';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'code',
		'name',
		'observations',
		'teacher_id',
	];

	public function teacher() {
		return $this->belongsTo('App\Models\Teacher');
	}

	public function students() {
		return $this->hasMany('App\Models\Student');
	}

}
