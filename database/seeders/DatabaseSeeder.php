<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Counter;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'mahmud zeglam',
            'email' => 'Admin@ziglam.com',
            'password' => Hash::make('admin1234'),
          

        ]);
        

        Counter::create([
            'counter' => 0,
        ]);
    }
}
