<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'award';

    protected $dates = ['deleted_at'];

    public function nomination() {
		return $this->hasMany('App\Nomination');
	}

	public function category() {
		return $this->belongsTo('App\Category');
	}
}
