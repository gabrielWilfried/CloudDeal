<?php

namespace App\Models;

use App\Models\File;

use App\Models\Signal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Request;

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

    protected $appends = ['files', 'format_price', 'image_path','url_to_edit','url_to_ad_detail', 'category_name', 'town_name'];

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class, 'annonce_id');
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
        return $this->hasMany(Boost::class, 'annonce_id');
    }

    public function discussions(): HasMany
    {
        return $this->hasMany(Discussion::class);
    }

    public function getFilesAttribute()
    {
        $files = File::where('target_id', $this->id)->where('target_type', Annonce::class)->get();
        foreach ($files as $file) {
            $file->path = url(str_replace('public', 'storage',$file->path));
        }
        return $files;
    }

    function getFormatPriceAttribute()
    {
        return toMoney($this->price);
    }

    function getImagePathAttribute()
    {
        return url(str_replace('public', 'storage',$this->image));
    }
    function getCategoryNameAttribute()
    {
        $category = Category::where('id','=', $this->category_id)->pluck('name');
        return $category[0];
    }
    function getTownNameAttribute()
    {
        $town = Town::where('id','=', $this->town_id)->pluck('name');
        return $town[0];
    }
    public function getUrlToAdDetailAttribute()
    {
       if(str_contains(Request::path(), 'admin')){
            return route('admin.ads.detail', $this->id);
       }
       return route('dashboard.singe-ad', $this->id);
    }

    public function getUrlToEditAttribute()
    {
        return route('admin.ads.edit', $this->id);
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
