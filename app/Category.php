<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('name');
    public function post(){
    	return $this->hasMany('post');
    }
}

