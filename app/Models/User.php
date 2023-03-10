<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable  implements HasMedia 
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'agree_consent_electronic',
        'user_type',
        'cc'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function identityVerification()
    {
        return $this->hasOne(IdentityVerification::class);
    }
    public function trustSetting()
    {
        return $this->hasOne(TrustSetting::class);
    }
    public function invesmentProfie()
    {
        return $this->hasOne(InvesmentProfile::class);
    }
    public function accreditation()
    {
        return $this->belongsTo(Accreditation::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    public function kyc()
    {
        return $this->hasOne(KYC::class);
    }

}
