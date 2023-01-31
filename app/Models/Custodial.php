<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custodial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'custodial_id',
        'ownerIdentityId',
        'accountStatus',
        'accountType',
        'accountNumber'
    ];
}
