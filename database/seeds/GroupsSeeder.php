<?php

use Illuminate\Database\Seeder;
use App\Groups;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Groups::class, 10)->create();
    }
}
