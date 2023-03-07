<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OfferDetailTab extends Model   implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    public function offerTiles(){
        return $this->hasMany(OfferTiles::class,'offer_detail_tabs_id');
    }
}
