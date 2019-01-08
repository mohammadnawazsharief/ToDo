<?php

use Illuminate\Database\Seeder;

class ToDosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\ToDo::class,10)->create();
    }
}
