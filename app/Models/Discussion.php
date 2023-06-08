<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $fillable = ['slug', 'is_open', 'annonce_id', 'is_agree_seller', 'is_agree_customer'];


    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }
}
