<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Boost extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['price', 'start_at', 'end_at', 'score', 'annonce_id'];


    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'target');
    }

    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
}