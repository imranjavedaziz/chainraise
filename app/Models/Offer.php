<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Offer extends Model  implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
        'issuer_id',
        'name',
        'short_description',
        'security_type',
        'symbol',
        'size',
        'size_label',
        'base_currency',
        'price_per_unit',
        'share_unit_label',
        'total_valuation',
        'commencement_date',
        'funding_end_date',
        'status',
        'feature_video',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'issuer_id');
    }
    public function investmentRestrictions()
    {
        return $this->hasOne(InvestmentRestrication::class,'offer_id');
    }
    public function callToAction()
    {
        return $this->hasOne(CallToAction::class);
    }
    public function offerDetail()
    {
        return $this->hasMany(OfferDetailTab::class);
    }
    public function offerVideos()
    {
        return $this->hasMany(OfferVideos::class);
    }
    public function contactInfo()
    {
        return $this->hasOne(OfferContact::class);
    }
    public function access()
    {
        return $this->hasOne(Access::class);
    }
    public function display()
    {
        return $this->hasOne(Display::class);
    }
    public function investmentSteps()
    {
        return $this->hasMany(InvestmentStep::class);
    }

    public function offerEsing()
    {
        return $this->hasOne(OfferEsignTemplate::class);
    }

  

}
