<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_book extends Model
{
    protected $table = 'type_book';

	public function news()
	{
		return $this->hasMany('App\book','id_type','id');
	}
}
