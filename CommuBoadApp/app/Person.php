<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function threads(){
      return $this -> hasMany('app\thread');
    }

    public function posts(){
      return $this -> hasMany('app\post');
    }

    public function getName($value)
    {
      $x = where('id',$value)->get();
      $name = $x -> name;
      return $name;
    }



}
