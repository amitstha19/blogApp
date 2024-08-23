<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role'=>'admin',
            'password' => Hash::make('password'),
        ]);
        

        // Create author user
        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@example.com',
            'role'=>'author',
            'password' => Hash::make('password'),
        ]);
       

        // Create general user
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'role'=>'author',
            'password' => Hash::make('password'),
        ]);
      

    }
}
