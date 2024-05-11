<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roleData = [
            [
                'name' => 'super-admin',
                'label' => 'SU',
            ],
            [
                'name' => 'admin',
                'label' => 'Admin',
            ],
            [
                'name' => 'member',
                'label' => 'Member',
            ]
        ]

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
