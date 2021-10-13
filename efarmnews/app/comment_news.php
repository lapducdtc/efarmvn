<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment_news extends Model
{
    //
    protected $table = 'comment_news';

    public function news()
	{
		return $this->belongto('App\news','id_news','id');
	}
}
