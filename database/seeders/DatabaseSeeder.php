<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use NinjaPortal\Portal\Models\Admin;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create([
            'name' => 'super_admin',
            'guard_name' => 'admin',
        ]);

        $admin = Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@ninja.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('super_admin');


    }
}
