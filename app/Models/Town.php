<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $guarded = ['name'];

    protected $fillable = [
        'name',
        'region_id',
        'description'
    ];


     // relation MorphMany between towns and files
     public function files():MorphMany
     {
        return $this->morphMany(File::class, 'target');
     }

     //relation one to many between towns and annonces
    public function annonces():HasMany
    {
        return $this->hasMany(Annonce::class);
    }

    //relation one to many(inverse) between towns and regions
    public function regions():BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
