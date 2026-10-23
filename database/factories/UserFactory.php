<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => fake()->name(),
      'email' => fake()->unique()->safeEmail(),
      'email_verified_at' => now(),
      'password' => 'password',
      'role' => 'cashier',
      'status' => 'active',
      'failed_login_attempts' => 0,
      'remember_token' => null,
    ];
  }

  public function operator(): static
  {
    return $this->state([
      'name' => 'Operator',
      'email' => 'operator@kanekura.test',
      'role' => 'operator',
    ]);
  }

  public function activeCashier(): static
  {
    return $this->state([
      'name' => 'Kasir Aktif',
      'email' => 'kasiraktif@kanekura.test',
      'role' => 'cashier',
      'status' => 'active',
    ]);
  }

  public function blockedCashier(): static
  {
    return $this->state([
      'name' => 'Kasir Blokir',
      'email' => 'kasirblokir@kanekura.test',
      'role' => 'cashier',
      'status' => 'block',
      'failed_login_attempts' => 3,
    ]);
  }
}
