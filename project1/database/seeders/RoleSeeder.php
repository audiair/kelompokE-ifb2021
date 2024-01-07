<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_owner = Role::create([
            'name' => 'owner'
        ]);
        
        $role_manajer = Role::create([
            'name' => 'manajer'
        ]);

        $role_supervisor = Role::create([
            'name' => 'supervisor'
        ]);

        $role_kasir = Role::create([
            'name' => 'kasir'
        ]);

        $role_staffgudang = Role::create([
            'name' => 'staff_gudang'
        ]);
    }
}
