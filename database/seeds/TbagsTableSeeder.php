<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TbagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 9; $i++) {
            DB::table('tbags')->insert([
                'tbag_name' => str_random(10),
                'description' => str_random(10),
                'img_name' => str_random(10),
                'tbag_price' => mt_rand(10, 50),
                'open_width' => mt_rand(10, 50),
                'open_heigth' => mt_rand(10, 50),
                'close_width' => mt_rand(10, 50),
                'close_heigth' => mt_rand(10, 50),
            ]);
        }
    }
}
