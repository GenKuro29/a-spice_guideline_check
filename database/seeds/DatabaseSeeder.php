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
        $this->call(ACQ4GuidelinesTableSeeder::class);
        $this->call(SYS2GuidelinesTableSeeder::class);
        $this->call(SYS3GuidelinesTableSeeder::class);
        $this->call(SYS4GuidelinesTableSeeder::class);
        $this->call(SYS5GuidelinesTableSeeder::class);
        $this->call(SYS6GuidelinesTableSeeder::class);
        $this->call(SWE1GuidelinesTableSeeder::class);
        $this->call(SWE2GuidelinesTableSeeder::class);
        $this->call(SWE3GuidelinesTableSeeder::class);
        $this->call(SWE4GuidelinesTableSeeder::class);
        $this->call(SWE5GuidelinesTableSeeder::class);
        $this->call(SWE6GuidelinesTableSeeder::class);
        $this->call(SUP1GuidelinesTableSeeder::class);
        $this->call(Sup8GuidelinesTableSeeder::class);
        $this->call(SUP9GuidelinesTableSeeder::class);
        $this->call(SUP10GuidelinesTableSeeder::class);
        
        $this->call(MAN3BpDescriptionsTableSeeder::class);
        $this->call(ACQ4BpDescriptionsTableSeeder::class);
        $this->call(SYS1BpDescriptionsTableSeeder::class);
        $this->call(SYS2BpDescriptionsTableSeeder::class);
        $this->call(SYS3BpDescriptionsTableSeeder::class);
        $this->call(SYS4BpDescriptionsTableSeeder::class);
        $this->call(SYS5BpDescriptionsTableSeeder::class);
        $this->call(SWE1BpDescriptionsTableSeeder::class);
        $this->call(SUP10BpDescriptionsTableSeeder::class);
        
        
    }
}
