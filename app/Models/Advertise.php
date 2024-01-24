<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advertise extends Model
{
    use HasFactory;

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function state(): BelongsTo {
        return $this->belongsTo(State::class);
    }

    public function images():HasMany {
        return $this->hasMany(AdvertiseImage::class);
    }
}