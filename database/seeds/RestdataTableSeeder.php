<?php

use Illuminate\Database\Seeder;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google',
            'url' => 'https://google.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Yahoo',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'MSN',
            'url' => 'https://www.msn.com/ja-jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();
    }
}
