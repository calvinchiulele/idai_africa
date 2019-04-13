<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $phonenumber
 * 
 * @property \Illuminate\Database\Eloquent\Collection $organizations
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'phonenumber'
	];

	public function organizations()
	{
		return $this->hasMany(\App\Models\Organization::class, 'users_id');
	}

	public function volunteers()
	{
		return $this->hasMany(\App\Models\Volunteer::class, 'users_id');
	}
}
