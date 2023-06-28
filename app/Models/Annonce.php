<?php

namespace App\Models;

use App\Models\File;

use App\Models\Signal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Annonce extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = ['file_id', 'file_type', 'level'];

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

    protected $happend = ['files'];

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    public function signals(): HasMany
    {
        return $this->hasMany(Signal::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function boosts(): HasMany
    {
        return $this->hasMany(Boost::class);
    }

    public function discussions(): HasMany
    {
        return $this->hasMany(Discussion::class);
    }

    public function getFilesAttribute()
    {
        $files = File::where('target_id', $this->id)->where('target_type', Annonce::class)->get();
        return $files;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function town(): BelongsTo
    {
        return $this->belongsTo(Town::class);
    }
}
