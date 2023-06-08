<?php

namespace App\Models;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = ['reasons' => 'array'];
}
