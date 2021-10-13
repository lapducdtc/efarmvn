<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
     protected $table = 'book';
     public function type_news()
	{
		return $this->belongto('App\type_book','id_type','id');
	}
}
