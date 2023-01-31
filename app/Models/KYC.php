<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    use HasFactory;
    public function kyc()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'kyc_level',
        'doc_status'
    ];
}
