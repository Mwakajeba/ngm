<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'jmwakajeba@ngml.co.tz'],
            [
                'name' => 'Julius Mwakajeba',
                'phone' => '0655577803',
                'role' => 'Senior Admin',
                'password' => '12345',
            ]
        );
    }
}
