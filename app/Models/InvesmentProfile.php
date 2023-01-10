<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvesmentProfile extends Model
{
    use HasFactory;
    protected $user_id = ['user_id'];
    protected $net_worth = ['net_worth'];
    protected $highest_education = ['highest_education'];
    protected $risk_tolerance = ['risk_tolerance'];
    protected $investment_experience = ['investment_experience'];
    protected $age = ['age'];
    protected $gender = ['gender'];


    protected $fillable = [
        'user_id',
        'net_worth',
        'highest_education',
        'risk_tolerance',
        'investment_experience',
        'annual_net_income',
        'age',
        'gender',
        'assets_under_management',
        'investment_style',
        'finra_crd',
        'website', 
        'linkedIn'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
