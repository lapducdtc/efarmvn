<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $table = 'news';

   
    public function type_news()
	{
		return $this->belongto('App\type_news','id_type','id');
	}
	public function comment()
	{
		return $this->hasMany('App\comment_news','id_news','id');
	}

	public function images_news()
	{
		return $this->hasMany('App\comment_news','id_news','id');
	}

    
}
