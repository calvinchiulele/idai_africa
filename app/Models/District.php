<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class District
 * 
 * @property int $id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property int $provinces_id
 * 
 * @property \App\Models\Province $province
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class District extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'provinces_id' => 'int'
	];

	protected $fillable = [
		'name',
		'latitude',
		'longitude',
		'provinces_id'
	];

	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class, 'provinces_id');
	}

	public function volunteers()
	{
		return $this->hasMany(\App\Models\Volunteer::class, 'districts_id');
	}
}
