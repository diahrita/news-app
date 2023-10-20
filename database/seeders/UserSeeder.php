<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = new User();
        $userData->name = 'admin';
        $userData->email = 'admin@gmail.com';
        $userData->password = bcrypt('admin123');
        $userData->is_admin = 1;
        $userData->save();
    }
}
