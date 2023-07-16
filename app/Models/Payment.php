<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($payment) {
            $payment->user_id = null != auth()->id() ? auth()->id() : 1;
            $payment->uuid = Str::uuid();
        });
    }

    public function target(): MorphTo
    {
        return $this->morphTo('target');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
