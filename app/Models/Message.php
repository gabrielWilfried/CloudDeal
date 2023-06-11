<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }


    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
}
