<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  public function run(): void
  {
    User::factory()->create([
      'name' => 'Operator',
      'email' => 'operator@kanekura.test',
      'role' => 'operator',
      'failed_login_attempts' => 0,
    ]);

    User::factory()->create([
      'name' => 'Kasir Blokir',
      'email' => 'kasirblokir@kanekura.test',
      'role' => 'cashier',
      'status' => 'block',
      'failed_login_attempts' => 3,
    ]);

    User::factory()->create([
      'name' => 'Kasir Aktif',
      'email' => 'kasiraktif@kanekura.test',
      'role' => 'cashier',
      'failed_login_attempts' => 0,
    ]);
  }
}
