<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announce extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'name',
        'price',
        'description',
        'level',
        'town_id',
        'user_id',
        'category_id'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function boosts(): HasMany
    {
        return $this->hasMany(Boost::class);
    }

    public function discussions():HasMany
    {
        return $this->hasMany(Discussion::class);
    }
    
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function towns(): BelongsTo
    {
        return $this->belongsTo(Towns::class);
    }
}
