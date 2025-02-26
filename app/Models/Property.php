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
        "address",
        "available_from",
        "available_to",
        "city_id",
        "type_id",
    ];

    public function getPrimaryKey()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image ? asset("storage/". $this->image) : "https://placehold.co/600x400";
    }

    public function getImageName()
    {
        return $this->image;
    }

    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    public function getAvailableFromDate()
    {
        return $this->available_from;
    }

    public function getAvailableToDate()
    {
        return $this->available_to;
    }

    public function getOwnerId()
    {
        return $this->user_id;
    }

    public function getTypeId()
    {
        return $this->type_id;
    }

    public function getCityId()
    {
        return $this->city_id;
    }

    

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
