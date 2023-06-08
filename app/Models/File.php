<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['target', 'path', 'file_name', 'type'];

    public function target():MorphTo
     {
        return $this->morphTo();
     }
}
