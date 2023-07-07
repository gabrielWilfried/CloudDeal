<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['annonce_id', 'amount', 'status', 'uuid'];

    protected static function booted()
    {
        static::creating(function ($payment) {
            $payment->uuid = Str::uuid();
        });

        // static::created(function ($buyedpackage) {
        //     $buyedpackage->hash_patient = Utils::generateRandomString(50);
        //     $buyedpackage->hash_hcp = Utils::generateRandomString(50);
        //     $buyedpackage->save();
        // });

        // static::updating(function ($buyedpackage) {
        //     $old_buyedpackage = $buyedpackage->getOriginal();
        // });

        // static::updated(function ($buyedpackage) {
        //     $contact = $buyedpackage->getContactAttribute();
        //     if ($contact != null) {
        //         $contact->update([
        //             'last_activity' => Carbon::now()
        //         ]);
        //     }
        // });
    }

    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
}