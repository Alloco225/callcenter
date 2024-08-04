<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $adminRole = Role::where('name', 'Admin')->first();
        $agentRole = Role::where('name', 'Agent')->first();
        $supervisorRole = Role::where('name', 'Supervisor')->first();
        $clientRole = Role::where('name', 'Client')->first();
        $userRole = Role::where('name', 'User')->first();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('securepassword'), // Make sure to hash this password in a real app
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'name' => 'Agent User',
            'email' => 'agent@example.com',
            'password' => Hash::make('securepassword'), // Make sure to hash this password in a real app
            'role_id' => $agentRole->id,
        ]);
        User::create([
            'name' => 'Supervisor User',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('securepassword'), // Make sure to hash this password in a real app
            'role_id' => $supervisorRole->id,
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('securepassword'), // Make sure to hash this password in a real app
            'role_id' => $userRole->id,
        ]);

    }
}
