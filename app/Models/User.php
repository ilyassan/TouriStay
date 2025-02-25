<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'remember_token',
        'role_id',
        'password',
    ];


    public function isAdmin()
    {
        return $this->role_id == RoleEnum::ADMIN;
    }

    public function isProprietor()
    {
        return $this->role_id == RoleEnum::PROPRIETOR;
    }

    public function isTourist()
    {
        return $this->role_id == RoleEnum::TOURIST;
    }



    // Local Scopes
    public function scopeTourists(Builder $query): void
    {
        $query->where('role_id', RoleEnum::TOURIST);
    }


    // Relationships
    public function favorites()
    {

    }






    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
