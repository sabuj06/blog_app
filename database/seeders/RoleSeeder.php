<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
        'name'=>'Admin',
        'slug'=>'admin',
        ]);

        Role::create([
        'name'=>'Editor',
        'slug'=>'editor'
        ]);

        Role::create([
        'name'=>'Author',
        'slug'=>'author'
        ]);

        Role::create([
        'name'=>'User',
        'slug'=>'user'
        ]);
    }
}
