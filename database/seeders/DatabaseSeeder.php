<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    UserFactory::new()->operator()->create();
    UserFactory::new()->activeCashier()->create();
    UserFactory::new()->blockedCashier()->create();
  }
}
