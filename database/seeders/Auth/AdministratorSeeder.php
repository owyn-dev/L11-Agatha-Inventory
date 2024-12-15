<?php

namespace Database\Seeders\auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdministratorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role = Role::findByName('administrator');

        $user = User::factory()->create([
            'full_name' => 'Agatha Delights',
            'username' => 'adminAgatha',
        ]);

        $user->assignRole($role);
    }
}
