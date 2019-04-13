<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VolunteersAsset
 * 
 * @property int $assets_id
 * @property int $volunteers_id
 * @property int $id
 * 
 * @property \App\Models\Asset $asset
 * @property \App\Models\Volunteer $volunteer
 *
 * @package App\Models
 */
class VolunteersAsset extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'assets_id' => 'int',
		'volunteers_id' => 'int'
	];

	protected $fillable = [
		'assets_id',
		'volunteers_id'
	];

	public function asset()
	{
		return $this->belongsTo(\App\Models\Asset::class, 'assets_id');
	}

	public function volunteer()
	{
		return $this->belongsTo(\App\Models\Volunteer::class, 'volunteers_id');
	}
}
