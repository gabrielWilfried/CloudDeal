<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Signal extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = ['reasons' => 'array'];

    protected $fillable = ['count', 'annonce_id', 'reasons'];

    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }
}
