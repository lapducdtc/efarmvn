<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images_news extends Model
{
    // 
    protected $table = 'images_news';

    public function news()
	{
		return $this->belongto('App\news','id_news','id');
	}
}
