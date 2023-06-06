<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['price', 'start_at', 'end_at', 'score', 'annonce_id'];


     // relation MorphMany between boosts and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }

      //relation one to many(inverse) between boost and annonces
      public function annonces():BelongsTo
      {
          return $this->belongsTo(Annonce::class);
      }

       //relation one to many(inverse) between boost and users
     //public function user():BelongsTo
     //{
         //return $this->belongsTo(User::class);
     //}
}
