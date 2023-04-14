<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'middle_name',
        'last_name',
        'title',
        'dob',
        'city',
        'address',
        'suit',
        'state',
        'zip',
        'entity_name',
        'legal_formation',
        'date_incorporation',
        'user_id',
        'ein',
        'naics',
        'naics_description', 
        'website'
    ];


    

}
