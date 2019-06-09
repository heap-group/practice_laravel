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
          'name' => 'シーダーダミー１',
          'mail' => 'seeder1@xx.com',
          'age' => 15,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'シーダーダミー２',
            'mail' => 'seeder2@xx.com',
            'age' => 20,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'シーダーダミー３',
            'mail' => 'seeder3xx.com',
            'age' => 25,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'シーダーダミー４',
            'mail' => 'seeder@4xx.com',
            'age' => 30,
        ];
        DB::table('people')->insert($param);
    }
}
