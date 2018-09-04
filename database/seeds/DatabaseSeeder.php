<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加
        $this->call(Man3GuidelinesTableSeeder::class);
        $this->call(GuidelinesTableSeeder::class);
        $this->call(Sup8GuidelinesTableSeeder::class);
        
    }
}
