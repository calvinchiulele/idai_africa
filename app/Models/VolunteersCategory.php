<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Apr 2019 15:40:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VolunteersCategory
 * 
 * @property int $volunteers_id
 * @property int $category_id
 * @property string $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\Volunteer $volunteer
 *
 * @package App\Models
 */
class VolunteersCategory extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'volunteers_category';
	public $incrementing = false;

	protected $casts = [
		'volunteers_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'volunteers_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function volunteer()
	{
		return $this->belongsTo(\App\Models\Volunteer::class, 'volunteers_id');
	}
}
