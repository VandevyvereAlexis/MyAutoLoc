<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;                // importe la classe "Role"


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // USER
        Role::create([
            'role' => 'user'        // création role "user"
        ]);

        // ADMIN
        Role::create([
            'role' => 'admin'       // création role "admin"
        ]);
    }
}

