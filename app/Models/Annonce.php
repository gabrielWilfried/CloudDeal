<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Annonce extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = ['morphable_id', 'morphable_type'];

    protected $with = ['morphable'];

    public function morphable(): MorphTo
    {
        return $this->morphTo('morphable');
    }
}
