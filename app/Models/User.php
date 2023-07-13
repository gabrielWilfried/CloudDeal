<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'address',
        'sex',
        'is_admin',
        'location'
    ];


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
        'password' => 'hashed',
        'location' => 'array',
    ];

    protected $appends = ['image_profile'];


    public function annonces(): HasMany
    {
        return $this->hasMany(Annonce::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function discussions(): HasMany
    {
        return $this->hasMany(Discussion::class);
    }

    public function signals(): HasMany
{
    return $this->hasMany(Signal::class);
}
public function hasSignaled(Annonce $annonce): bool
{
    return $this->signals()->where('user_id', Auth::user())->exists();
}


    public function getImageProfileAttribute() //: MorphMany
    {/*
        $file = File::where('target_id', $this->id)->where('target_type', User::class)->first();
        $file->path = str_replace('public', 'storage', $file->path);
        return $file; */
    }
}
