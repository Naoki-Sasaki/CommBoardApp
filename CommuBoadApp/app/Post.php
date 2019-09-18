<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function people(){
    return $this -> belongTo('App\Person');
  }

  public function threads(){
    return $this -> belongTo('App\Person');
  }
}
