<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 14:52:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $volunteers
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $table = 'category';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function volunteers()
	{
		return $this->belongsToMany(\App\Models\Volunteer::class, 'volunteers_category', 'category_id', 'volunteers_id')
					->withPivot('id');
	}
}
