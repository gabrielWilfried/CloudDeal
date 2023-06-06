<?php

namespace App\Models;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Notifiable;


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
        'location',
    ];


    //Relationships with users

    //relation one to many between users and annonces
    public function annonces():HasMany
    {
        return $this->hasMany(Annonce::class);
    }

     //relation one to many between users and boosts
     //public function boosts():HasMany
     //{
         //return $this->hasMany(Boost::class);
     //}

      //relation one to many between users and comments
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

     //relation one to many between users and discussions
     public function discussions():HasMany
     {
         return $this->hasMany(Discussion::class);
     }


     // relation MorphMany between users and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }




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
}
