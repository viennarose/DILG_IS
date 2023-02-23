<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Super-Admin']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Publisher']);

        $user = User::create([
            'name' => 'Albus Dumbledore',
            'position' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'admin12345',

        ]);
        $user->assignRole($role1);
    }
}
