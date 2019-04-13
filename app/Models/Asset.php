<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Asset
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class Asset extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name'
	];

	public function volunteers()
	{
		return $this->belongsToMany(\App\Models\Volunteer::class, 'volunteers_assets', 'assets_id', 'volunteers_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
