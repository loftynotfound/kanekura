<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => '',
      'email' => '',
      'email_verified_at' => null,
      'password' => Hash::make('password'),
      'role' => 'cashier',
      'status' => 'active',
      'failed_login_attempts' => 0,
      'remember_token' => null,
    ];
  }
}
