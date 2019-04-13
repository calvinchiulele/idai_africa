<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Province
 * 
 * @property int $id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $districts
 *
 * @package App\Models
 */
class Province extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name',
		'latitude',
		'longitude'
	];

	public function districts()
	{
		return $this->hasMany(\App\Models\District::class, 'provinces_id');
	}
}
