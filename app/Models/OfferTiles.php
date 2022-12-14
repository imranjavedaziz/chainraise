<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OfferTiles extends Model
{
    use HasFactory ,InteractsWithMedia;

    public function offerTiles(){
        return $this->belongsTo(OfferDetailTab::class);
    }
    
}
