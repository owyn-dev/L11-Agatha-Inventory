<?php

namespace Database\Seeders\auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class InventorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role = Role::findByName('inventory');

        $user = User::factory()->create([
            'full_name' => 'Agatha Inventory',
            'username' => 'inventoryAgatha',
        ]);

        $user->assignRole($role);
    }
}
