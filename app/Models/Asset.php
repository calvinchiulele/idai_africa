<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Asset
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class Asset extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function volunteers()
	{
		return $this->belongsToMany(\App\Models\Volunteer::class, 'volunteers_assets', 'assets_id', 'volunteers_id')
					->withPivot('id');
	}
}
