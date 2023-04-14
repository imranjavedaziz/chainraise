<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityVerification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'social_security',
        'primary_contact_social_security',
        'tax_entity_type',
        'tax_identification',
        'nationality',
        'country_residence',
        'doc_type'
    ];
}
