<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['Administrator', 'admin@example.com', 'admin'],
            ['User Biasa',    'user@example.com',  'user'],
        ] as [$name, $email, $role]) {
            $user = User::firstOrNew(['email' => $email]);
            $user->forceFill([
                'name'     => $name,
                'password' => Hash::make('password123'),
                'role'     => $role,
            ])->save();
        }
    }
}