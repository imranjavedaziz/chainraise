<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferDetailTab extends Model
{
    use HasFactory;
    public function offerTiles(){
        return $this->hasMany(OfferTiles::class,'offer_detail_tabs_id');
    }
}
