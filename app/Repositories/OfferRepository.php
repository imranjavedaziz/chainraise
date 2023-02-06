<?php
namespace App\Repositories;

use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Models\Offer;

class OfferRepository implements OfferRepositoryInterface
{

    public function store($data)
    {
        return Offer::create($data);
    }

    
}