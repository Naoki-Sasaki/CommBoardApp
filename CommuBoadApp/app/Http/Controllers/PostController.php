<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreatePost;

class PostController extends Controller
{
  public function index(Request $request){
    $this_threads_id = $request -> threads_id;

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

      } else {
        $this_threads_id = $request -> threads_id;
        return view('posts_create',compact('sesid','this_threads_id'));
      }
    }



    public function add(CreatePost $request){
      $this_text = $request -> text;
      $sesid = $request -> session() -> get('people_id','');
      $this_threads_id = $request -> threads_id;

      DB::table('posts')->insert(
        ['thread_id' => $this_threads_id,
         'post_datetime' => Carbon::now(),
         'people_id'=> $sesid[0] -> id,
         'text' => $this_text
       ]);

      return redirect(route('thre',['threads_id' => $this_threads_id]));

    }


}
