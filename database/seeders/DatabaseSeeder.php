<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\auth\SalesSeeder;
use Database\Seeders\auth\InventorySeeder;
use Database\Seeders\auth\ProductionSeeder;
use Database\Seeders\auth\AdministratorSeeder;
use Database\Seeders\Auth\RoleAndPermissionSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        // Generate Data Role And Permission
        $this->call(RoleAndPermissionSeeder::class);

        // Generate Data Users
        $this->call(AdministratorSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(ProductionSeeder::class);
        $this->call(SalesSeeder::class);

        // Generate Fake Data Users
        User::factory(46)->withRandomRole()->create();
    }
}
