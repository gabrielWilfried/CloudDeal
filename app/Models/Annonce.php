<?php

namespace App\Models;

use App\Models\File;

use App\Models\Signal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Annonce extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = ['file_id', 'file_type'];

    protected $with = ['file'];

    protected $fillable = [
        'name',
        'price',
        'description',
        'level',
        'town_id',
        'user_id',
        'category_id'
    ];

    // Relationships with annonces

    //relation one to many between annonces and signals
    public function payments():HasOne
    {
        return $this->hasOne(Payment::class);
    }

    //relation one to many between annonces and signals
    public function signals():HasMany
    {
        return $this->hasMany(Signal::class);
    }

    //relation one to many between annonces and comments
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

    //relation one to many between annonces and boosts
     public function boosts():HasMany
     {
         return $this->hasMany(Boost::class);
     }

     //relation one to many between annonces and discussions
     public function discussions():HasMany
     {
        return $this->hasMany(Discussion::class);
     }

    //relation MorphMany between annonces and files
    public function files():MorphMany
    {
       return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
    }

     //relation one to many(inverse) between annonces and users
     public function user():BelongsTo
     {
         return $this->belongsTo(User::class);
     }

    //relation one to many(inverse) between annonces and categories
    public function categories():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //relation one to many(inverse) between annonces and towns
    public function towns():BelongsTo
    {
        return $this->belongsTo(Town::class);
    }
    public function signals()
    {
        return $this->hasMany(Signal::class);
    }

}
