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
        $this->call(SWE1GuidelinesTableSeeder::class);
        $this->call(SWE2GuidelinesTableSeeder::class);
        $this->call(SWE3GuidelinesTableSeeder::class);
        $this->call(SWE4GuidelinesTableSeeder::class);
        $this->call(SWE5GuidelinesTableSeeder::class);
        $this->call(SWE6GuidelinesTableSeeder::class);
        $this->call(Sup8GuidelinesTableSeeder::class);
    }
}
