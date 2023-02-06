<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegCF extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_id',
        'url_educational_materials',
        'url_issuer_form_c',
        'status',
    ];
}
