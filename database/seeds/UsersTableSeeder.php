<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
          'name' => 'John Doe',
          'email' => 'johndoe@example.com',
          'password' => Hash::make('secret')
        ]);
        
        factory(User::class, 30)->create();
    }
}
