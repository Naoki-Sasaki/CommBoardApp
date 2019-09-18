<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'title' => 'neko',
        'people_id' => '1',
        'create_datetime' => Carbon::now(),
      ];
      DB::table('Threads') -> insert($param);

      $param = [
        'people_id' => '2',
        'create_datetime' => Carbon::yesterday(),
      ];
      DB::table('Threads') -> insert($param);

      $param = [
        'title' => 'ryouri',
        'people_id' => '3',
        'create_datetime' => Carbon::tomorrow(),
      ];
      DB::table('Threads') -> insert($param);
    }
}
