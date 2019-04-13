<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Organization
 * 
 * @property int $id
 * @property int $users_id
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Organization extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}
}
