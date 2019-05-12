<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $phonenumber
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $organizations
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class User extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name',
		'phonenumber'
	];

	public function organization()
	{
		return $this->hasOne(\App\Models\Organization::class, 'users_id');
	}

	public function volunteer()
	{
		return $this->hasOne(\App\Models\Volunteer::class, 'users_id');
	}
}
