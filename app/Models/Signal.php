<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = ['reasons' => 'array'];

    protected $fillable = ['count', 'annonce_id', 'reasons'];


     // relation MorphMany between signal and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }

      //relation one to many(inverse) between signals and annonces
      public function annonces():BelongsTo
      {
          return $this->belongsTo(Annonce::class);
      }
}
