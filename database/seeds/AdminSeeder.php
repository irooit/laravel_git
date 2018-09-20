<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Admin::class, 30)->create();
        $user = $users[1];
        $user->name = "admin";
        $user->email = "hongcoo@qq.com";
        $user->save();
    }
}