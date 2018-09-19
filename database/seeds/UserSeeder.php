<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class, 30)->create();
        $user = $users[1];
        $user->name = "Rooit";
        $user->email = "hongcoo@qq.com";
        $user->save();
    }
}
