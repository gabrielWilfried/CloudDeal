<?php

namespace App\Models;

use App\Models\File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Annonce extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = ['file_id', 'file_type'];

    protected $with = ['file'];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

}
