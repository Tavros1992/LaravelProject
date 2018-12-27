<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table="users";

    function advertisments()
    {
    	return $this->hasMany('App\advens','users_id','id');
    }
}
