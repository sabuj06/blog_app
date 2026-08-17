<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'role_id'=>3,
            'name'=>'author user',
             'email'=>'author@gmail.com',
            'password'=>hash::make('password'),
            'avatar'=>'avatar/default.png',
            'bio'=>'Blog Author',
            'status'=> true,
        ]);

        User::create([
        'role_id'=>4,
        'name'=>'Normal User',
        'email'=>'user@example.com',
        'password'=>hash::make('password'),

        'avatar'=>'avatar/default.png',
        'bio'=>'Blog Reader',
        'status'=>true,
        ]);
    }
}
