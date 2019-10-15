<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use Carbon\Carbon;
use App\Http\Requests\CreateThread;

class ThreadController extends Controller
{
    public function index(Request $request){
      $all = Thread::all();

      $getnames = Thread::
        join('people', 'people.id','=', 'threads.people_id')
            ->select('people.name')
            ->get();

      $sesid = $request -> session() -> get('logid','');

      return view('threads',compact('getnames','all','sesid','sesid'));
    }



    public function create(Request $request){
      $sesid = $request -> session() -> get('logid','');
      if($sesid == ''){
        return redirect('/threads');
      }
      return view('/threads_create',compact('sesid'));
    }



    public function add(CreateThread $request){
      $addtitle = $request -> title;
      $sesid = $request -> session() -> get('people_id');



      $param = [
        'title' => $addtitle,
        'people_id' => $sesid[0] -> id,
        'create_datetime' => Carbon::now(),
      ];

      DB::insert('insert into Threads (title,people_id,create_datetime) values (:title, :people_id,:create_datetime)',$param);


      return redirect('/threads');
    }

}
