<?php

namespace Database\Seeders\auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class ProductionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role = Role::findByName('production');

        $user = User::factory()->create([
            'full_name' => 'Agatha Production',
            'username' => 'productionAgatha',
        ]);

        $user->assignRole($role);
    }
}
