<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
	public $timestamps = false;

	 protected $fillable = [
        'user_id','permission_level',
    ];
    
}
