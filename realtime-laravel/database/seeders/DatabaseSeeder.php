<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\StatusDokumen;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'slug' => 'engginer',
            'role' => "Engginer",
        ]);
        Role::create([
            'slug' => 'manager',
            'role' => "Manager",
        ]);
        Role::create([
            'slug' => 'admin',
            'role' => "Admin",
        ]);
        User::create([
            'name' => 'Bill Gates',
            'email' => 'bilga@gmail.com',
            'password' => Hash::make(12345),
            'role' => 2
        ]);
        User::create([
            'name' => 'Mark Zuckerberg',
            'email' => 'zuck@gmail.com',
            'password' => Hash::make(12345),
            'role' => 1
        ]);
        User::create([
            'name' => 'Elon Musk',
            'email' => 'elon@gmail.com',
            'password' => Hash::make(12345),
            'role' => 3
        ]);
        StatusDokumen::create([
            'status' => 'Ditinjau'
        ]);
        StatusDokumen::create([
            'status' => 'Dikembalikan'
        ]);
        StatusDokumen::create([
            'status' => 'Selesai'
        ]);
    }
}
