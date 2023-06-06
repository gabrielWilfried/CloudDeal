<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['annonce_id', 'amount', 'status'];


     // relation MorphMany between payment and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }

     //relation one to many(inverse) between payments and annonces
     public function annonces():BelongsTo
     {
         return $this->belongsTo(Annonce::class);
     }
}
