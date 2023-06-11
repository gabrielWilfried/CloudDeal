<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Region extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['files'];

    protected $fillable = ['name', 'description'];

    public function towns(): HasMany
    {
        return $this->hasMany(Town::class);
    }

    public function getFilesAttribute()
    {
        $files = File::where('target_id', $this->id)->where('target_type', Region::class)->get();
        $files->map(function ($file) {
            $file->path = str_replace('public', 'storage', $file->path);
        });

        return $files;
    }
}
