<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param string $password
     * @return void
     * @throws BindingResolutionException
     */
    public function setPasswordAttribute(string $password): void
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * @param string $name
     * @return string
     */
    public function getNameAttribute(string $name): string
    {
        return ucwords($name);
    }

    /**
     *
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
