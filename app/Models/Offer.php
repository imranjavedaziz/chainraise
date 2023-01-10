<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Offer extends Model  implements HasMedia
{
    use HasFactory,InteractsWithMedia;

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

  

}
