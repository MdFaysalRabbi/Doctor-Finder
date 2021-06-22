<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Mou',
            'email'=>'nijhum@gmail.com',
            'role'=>1,
            'password'=>Hash::make('12345678')
        ]);
    }
}
