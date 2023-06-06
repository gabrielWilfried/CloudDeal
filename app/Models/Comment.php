<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['content', 'user_id', 'annonce_id'];


    // Relationships
    //relation one to many(inverse) between comments and users
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //relation one to many(inverse) between comments and annonces
    public function annonces():BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }

     // relation MorphMany between comments and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }
}
