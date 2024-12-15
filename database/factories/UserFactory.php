<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory {
    protected static ?string $password;

    public function definition(): array {
        return [
            'full_name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function withRandomRole(): static {
        return $this->afterCreating(function ($user) {
            $role = Role::inRandomOrder()->first();

            if ($role) {
                $user->assignRole($role);
            }
        });
    }
}
