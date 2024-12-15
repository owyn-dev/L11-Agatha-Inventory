<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Define permissions
        $permissions = [
            // ------ Dashboard
            'view dashboard',

            // ------ Feature: Product Inventory Priority
            'view product analysis',

            // ------ Product Management
            'view product',
            'show product',
            'create product',
            'edit product',
            'delete product',
            'barcode scanner',

            // ------ Production Management
            'view production',
            'show production',
            'create production',
            'edit production',
            'delete production',
            'view production report',

            // ------ Sales Management
            'view sales',
            'show sales',
            'create sales',
            'edit sales',
            'delete sales',
            'view sales report',

            // ------ Products Inventory Management
            'view inventory',
            'show inventory',
            'create inventory',
            'edit inventory',
            'delete inventory',
            'view-inventory-report',

            // ------ User Management
            'view user',
            'show user',
            'create user',
            'edit user',
            'delete user',

            // ------ Role Management
            'view role',
            'show role',
            'create role',
            'edit role',
            'delete role',

            // ------ Permission Management
            'view permission',
            'create permission',
            'edit permission',
            'delete permission',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Define roles
        $roles = [
            'administrator',
            'inventory',
            'production',
            'sales',
        ];

        // Create roles and assign permissions
        foreach ($roles as $role) {
            $newRole = Role::create(['name' => $role]);

            // Assign all permissions to administrator
            if ($role === 'administrator') {
                $newRole->givePermissionTo($permissions);
            }

            if ($role === 'inventory') {
                $newRole->givePermissionTo([
                    // ------ Dashboard
                    'view dashboard',

                    // ------ Feature: Product Inventory Priority
                    'view product analysis',

                    // ------ Product Management
                    'view product',
                    'show product',
                    'create product',
                    'edit product',
                    'delete product',
                    'barcode scanner',

                    // ------ Production Management
                    'view production',
                    'show production',
                    'create production',
                    'edit production',
                    'delete production',
                    'view production report',

                    // ------ Sales Management

                    // ------ Products Inventory Management
                    'view inventory',
                    'show inventory',
                    'create inventory',
                    'edit inventory',
                    'delete inventory',
                    'view-inventory-report',

                    // ------ User Management
                    'show user',
                    'edit user',

                    // ------ Role Management

                    // ------ Permission Management
                ]);
            }

            if ($role === 'production') {
                $newRole->givePermissionTo([
                    // ------ Dashboard
                    'view dashboard',

                    // ------ Feature: Product Inventory Priority
                    'view product analysis',

                    // ------ Product Management
                    'view product',
                    'show product',
                    'barcode scanner',

                    // ------ Production Management
                    'view production',
                    'show production',
                    'create production',
                    'edit production',
                    'delete production',
                    'view production report',

                    // ------ Sales Management

                    // ------ Products Inventory Management

                    // ------ User Management
                    'show user',
                    'edit user',

                    // ------ Role Management

                    // ------ Permission Management
                ]);
            }

            // Assign specific permissions to other roles
            if ($role === 'sales') {
                $newRole->givePermissionTo([
                    // ------ Dashboard
                    'view dashboard',

                    // ------ Feature: Product Inventory Priority
                    'view product analysis',

                    // ------ Product Management
                    'view product',
                    'show product',
                    'create product',
                    'edit product',
                    'delete product',
                    'barcode scanner',

                    // ------ Production Management
                    'view production report',

                    // ------ Sales Management
                    'view sales',
                    'show sales',
                    'create sales',
                    'edit sales',
                    'delete sales',
                    'view sales report',

                    // ------ Products Inventory Management

                    // ------ User Management
                    'show user',
                    'edit user',

                    // ------ Role Management

                    // ------ Permission Management
                ]);
            }
        }
    }
}
