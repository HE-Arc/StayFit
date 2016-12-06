<?php

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Activity::create([
            'name'=>'bike',
            'coefficient'=>8,
        ]);
        \App\Activity::create([
            'name'=>'run',
            'coefficient'=>6,
        ]);
        \App\Activity::create([
            'name'=>'walk',
            'coefficient'=>5,
        ]);
    }
}
