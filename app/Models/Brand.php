<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'video',
        'brand_type',
    ];

    public function coordination()
    {
        return $this->hasMany(BrandCoordination::class);
    }

    public function getMainVideoAttribute()
    {
        return Storage::url($this->video);
    }

    public function scopeBrandGstage($query)
    {
        return $query->where('brand_type', 1);
    }

    public function scopeBrandGallipoli($query)
    {
        return $query->where('brand_type', 2);
    }
}
