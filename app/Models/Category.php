<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
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
class Category extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'category';

	protected $fillable = [
		'name'
	];

	public function volunteers()
	{
		return $this->belongsToMany(\App\Models\Volunteer::class, 'volunteers_category', 'category_id', 'volunteers_id')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
