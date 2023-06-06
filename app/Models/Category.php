<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['name', 'description'];

    // Relationships with categories

    //relation one to many between categories and annonces
    public function annonces():HasMany
    {
        return $this->hasMany(Annonce::class);
    }

     // relation MorphMany between categories and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }
}
