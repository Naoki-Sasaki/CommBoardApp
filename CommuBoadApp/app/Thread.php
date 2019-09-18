<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function people(){
      return $this -> belongTo('App\Person');
    }

    public function posts(){
      return $this -> hasMany('App\Post');
    }

    protected $casts = ['people_id' => 'integer'];
}
