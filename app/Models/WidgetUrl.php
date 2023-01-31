<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidgetUrl extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_id',
        'user_id',
        'widget_url',
    ];
}
