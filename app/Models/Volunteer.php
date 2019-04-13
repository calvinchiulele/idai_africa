<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Volunteer
 * 
 * @property int $id
 * @property string $phonenumber
 * @property int $status
 * @property int $districts_id
 * @property int $users_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\District $district
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $assets
 * @property \Illuminate\Database\Eloquent\Collection $categories
 *
 * @package App\Models
 */
class Volunteer extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'status' => 'int',
		'districts_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'phonenumber',
		'status',
		'districts_id',
		'users_id'
	];

	public function district()
	{
		return $this->belongsTo(\App\Models\District::class, 'districts_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}

	public function assets()
	{
		return $this->belongsToMany(\App\Models\Asset::class, 'volunteers_assets', 'volunteers_id', 'assets_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function categories()
	{
		return $this->belongsToMany(\App\Models\Category::class, 'volunteers_category', 'volunteers_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
