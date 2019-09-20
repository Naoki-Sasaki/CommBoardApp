<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
  public function show(){
        return view('login');
  }

  public function login(Request $request){
    $login_id = $request -> login_id;
    $login_pass = $request -> login_pass;

    $getid = Person::
      select('id')
      ->where('login_id','=',$login_id)
      ->get();

    if (Person::where('login_id', '=', $login_id)->exists()) {
        if (Person::where('login_pass', '=', $login_pass)->exists()) {
            $request -> session() -> put('logid',$login_id);
            $request -> session() -> put('people_id',$getid);


            //$existid = true;
            return redirect('/threads');
        } else {
            //$existid = false;
            return redirect('/signin');
        }
    } else {
        //$existid = false;
        return redirect('/signin');
    }
  }

  public function logout(){
    session()->forget('logid');
    return redirect('/threads');
  }

  public function create(){
        return view('create_people');
  }

  public function add(Request $request){
    $new_login_id = $request -> new_login_id;
    $new_login_pass = $request -> new_login_pass;


    if(Person::where('login_id','=', $new_login_id)->exists()){
      return redirect('/signup');
    } else {

      $param = [
        'login_id' => $new_login_id,
        'login_pass' => $new_login_pass,
      ];

      DB::insert('insert into people (login_id,login_pass) values (:login_id, :login_pass)',$param);
      return redirect('/signin');
    }


  }


  public function editshow(Request $request){
    $sesid = $request -> session() -> get('logid','');

    if($sesid == ''){
      return redirect('/threads');
    }else {
      return view('people_edit');
    }
  }


  public function edit(Request $request){
    $new_name = $request -> new_name;
    $sesid = $request -> session() -> get('logid','');
    //return view('people_edit',dd($new_name));
    //DB::insert('insert into people (name) values (:new_name)',$new_name);
    DB::table('people')
            ->where('login_id',$sesid )
            ->update(['name' => $new_name]);
    return redirect('/threads');
  }
}
