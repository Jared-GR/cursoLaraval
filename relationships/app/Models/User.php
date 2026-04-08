<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

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
    
    //  1:!
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }

    // 1:n
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->BelongsToMany(Role::class)->withPivot('added_by');
    }

    // public function phoneSim(): HasOneThrough
    // {
    //     return $this->HasOneThrough(Sim::class,Phone::class);
    // }

    public function phoneSims(): HasManyThrough
    {
        return $this->HasManyThrough(Sim::class,Phone::class);
    }

    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function images() : MorphMany
    {
        return $this->MorphMany(Image::class, 'imageable');
    }
    // 1:40 h
}
