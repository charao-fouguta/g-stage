<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'posted_date',
        'image',
        'title',
        'content',
        'visible',
    ];

    public function getMainImgAttribute()
    {
        return Storage::url($this->image);
    }
}
