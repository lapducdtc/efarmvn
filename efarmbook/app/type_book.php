<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_book extends Model
{
    protected $table = 'type_book';

	public function type_book()
	{
		return $this->hasMany('App\type_book','id_type','id');
	}
}
