<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'josef@mail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Josef Waelchi',
                'email' => 'josef@mail.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
