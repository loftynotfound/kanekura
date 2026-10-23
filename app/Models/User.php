<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

#[Fillable(['name', 'email', 'password', 'role', 'status', 'failed_login_attempts'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
  /** @use HasFactory<UserFactory> */
  use HasFactory, Notifiable;

  public const MAX_FAILED_LOGINS = 3;

  protected $primaryKey = 'user_id';

  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
      'failed_login_attempts' => 'integer',
    ];
  }

  public function transactions(): HasMany
  {
    return $this->hasMany(Transaction::class, 'user_id', 'user_id');
  }

  public function isOperator(): bool
  {
    return $this->role === 'operator';
  }

  public function isCashier(): bool
  {
    return $this->role === 'cashier';
  }

  public function isBlocked(): bool
  {
    return $this->status === 'block';
  }

  public function registerFailedLogin(): void
  {
    if (!$this->isCashier()) {
      return;
    }

    $this->failed_login_attempts++;

    if ($this->failed_login_attempts >= self::MAX_FAILED_LOGINS) {
      $this->status = 'block';
    }

    $this->save();
  }

  public function resetFailedLogins(): void
  {
    $this->failed_login_attempts = 0;
    $this->save();
  }
}
