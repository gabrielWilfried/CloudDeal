<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Carbon\Carbon;

class Boost extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['price', 'start_at', 'end_at', 'score', 'annonce_id'];

    protected $appends = ['format_date'];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'target');
    }

    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
    public function getFormatDateAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d',  $this->end_at);
        return $date->format('l, j F Y');
    }
}
