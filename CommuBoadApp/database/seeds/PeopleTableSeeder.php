<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'login_id' => 'tanaka',
          'login_pass' => 'tanaka',
          'name' => 'tanaka',
        ];
        DB::table('people') -> insert($param);

        $param = [
          'login_id' => 'satou',
          'login_pass' => 'satou',
          'name' => 'satou',
        ];
        DB::table('people') -> insert($param);

        $param = [
          'login_id' => 'suzuki',
          'login_pass' => 'suzuki',
        ];
        DB::table('people') -> insert($param);
    }
}
