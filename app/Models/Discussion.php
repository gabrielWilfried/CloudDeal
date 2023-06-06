<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['slug', 'is_open', 'annonce_id', 'is_agree_seller', 'is_agree_customer'];


    // Relationships


     // relation MorphMany between discussions and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }

      //relation one to many(inverse) between discussions and users
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //relation one to many(inverse) between discussions and annonces
    public function annonces():BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }
}
