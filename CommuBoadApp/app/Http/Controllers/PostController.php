<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  public function index(Request $request){
    $this_threads_id = $request -> threads_id;


    // $getthreadnames = Post::
    //   join('people', 'people.id','=', 'posts.people_id')
    //     ->select('people.name')
    //     ->where('thread_id','=',$this_threads_id)
    //     ->get();

    $getall = Post::
      select('id','text','post_datetime')
      ->where('thread_id','=',$this_threads_id)
      ->get();

    $getpostnames = Post::
      join('people', 'people.id','=', 'posts.people_id')
      ->select('people.name','text','post_datetime')
      ->where('thread_id','=',$this_threads_id)
      ->get();

    $sesid = $request -> session() -> get('logid','');
    return view('posts',compact('getall','getpostnames','sesid'));
    }



    public function create(Request $request){
      $sesid = $request -> session() -> get('logid','');
      if($sesid == ''){
        return redirect('/threads');
      }
      $this_threads_id = $request -> threads_id;
      return view('posts_create',compact('sesid','this_threads_id'));
    }



    public function add(Request $request){
      $this_text = $request -> texts;
      $sesid = $request -> session() -> get('people_id','');
      $this_threads_id = $request -> threads_id;

      $param = [
        'threads_id' => $this_threads_id,
        'post_datetime' => Carbon::now(),
        'people_id' => $sesid[0] -> id,
        'text' => $request -> $this_text,
      ];

      DB::insert('insert into posts (threads_id,post_datetime,people_id,text) values (:threds_id, :post_datetime,:people_id,:text)',$param);

      return redirect('/threads');
    }


}
