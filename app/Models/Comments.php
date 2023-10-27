<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['content', 'user_id', 'announce_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function announce(): BelongsTo
    {
        return $this->belongsTo(Announce::class);
    }
}
