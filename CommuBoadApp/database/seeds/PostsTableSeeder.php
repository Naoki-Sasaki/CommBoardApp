<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'thread_id' => 1,
        'people_id' => 1,
        'post_datetime' => Carbon::create(2019,9,8,12,30,5),
        'text' => 'kononekokawaii'
      ];
      DB::table('posts') -> insert($param);

      $param = [
        'thread_id' => 1,
        'people_id' => 2,
        'post_datetime' => Carbon::create(2019,9,8,12,35,5),
        'text' => 'sorena'
      ];
      DB::table('posts') -> insert($param);

      $param = [
        'thread_id' => 1,
        'people_id' => 1,
        'post_datetime' => Carbon::create(2019,9,8,12,37,5),
        'text' => 'yes'
      ];
      DB::table('posts') -> insert($param);


      $param = [
        'thread_id' => 2,
        'people_id' => 2,
        'post_datetime' => Carbon::create(2019,9,9,12,30,5),
        'text' => 'none'
      ];
      DB::table('posts') -> insert($param);

      $param = [
        'thread_id' => 2,
        'people_id' => 3,
        'post_datetime' => Carbon::create(2019,9,9,12,40,5),
        'text' => 'yes'
      ];
      DB::table('posts') -> insert($param);


      $param = [
        'thread_id' => 3,
        'people_id' => 3,
        'post_datetime' => Carbon::create(2019,9,9,12,42,5),
        'text' => 'nanitukuru'
      ];
      DB::table('posts') -> insert($param);

      $param = [
        'thread_id' => 3,
        'people_id' => 1,
        'post_datetime' => Carbon::create(2019,9,9,12,45,5),
        'text' => 'naninisiyou'
      ];
      DB::table('posts') -> insert($param);

    }
}
