<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminCredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadministrator = \App\Models\User::factory()->create([
            'name' => 'St. Joseph Cathedral Parish',
            'email' => 'stjosephcathedral@gmail.com',
            'password' => Hash::make('stjosephcathedral@gmail.com'),
        ]);

        $superadministrator->addRole('superadministrator');
    }
}
