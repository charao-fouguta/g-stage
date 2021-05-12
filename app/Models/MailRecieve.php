<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailRecieve extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'receive_notification'];

    public function scopeOnlyNotifiable($query)
    {
        return $query->where('receive_notification', true);
    }
}
