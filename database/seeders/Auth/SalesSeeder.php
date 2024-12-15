<?php

namespace Database\Seeders\auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SalesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role = Role::findByName('sales');

        $user = User::factory()->create([
            'full_name' => 'Agatha Sales',
            'username' => 'salesAgatha',
        ]);

        $user->assignRole($role);
    }
}
