<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['name', 'description'];

    // Relationships with regions

    //relation one to many between regions and town
    public function towns():HasMany
    {
        return $this->hasMany(Town::class);
    }

     // relation MorphMany between regions and files
     public function files():MorphMany
     {
        return $this->morphMany(related: 'App\Http\Models\File', name: 'target');
     }
}
