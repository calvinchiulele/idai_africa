<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Organization
 * 
 * @property int $id
 * @property int $users_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Organization extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

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
