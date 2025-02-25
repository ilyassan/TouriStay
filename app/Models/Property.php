<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $table = "properties";

    protected $fillable = [
        "title",
        "description",
        "user_id",
        "price",
        "image",
        "bedrooms",
        "bathrooms",
        "available_from",
        "available_to",
        "location_id"
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
