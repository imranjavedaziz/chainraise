<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountGUID extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_id',
        'user_id',
        'name',
        'accountNumberLast4',
        'accountGuid',
        'financialInstitutionName',
        'accountType',
        'smallLogoUrl',
        'mediumLogoUrl',
    ];
}
