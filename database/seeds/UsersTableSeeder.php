<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'hariel',
            'email'=>'hariel65@yahoo.com.ar',
            'password'=>bcrypt('123456')
        ]);
    }
}
