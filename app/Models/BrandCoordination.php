<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class BrandCoordination extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'image',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getCoordinationImgAttribute()
    {
        return Storage::url($this->image);
    }

    public function getSelectedBrandTypeAttribute()
    {
        return config('admin.brand_type')[$this->brand_id] ?? null;
    }
}
