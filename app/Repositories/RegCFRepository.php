<?php
namespace App\Repositories;

use App\Repositories\Interfaces\RegCFRepositoryInterface;
use App\Models\RegCF;

class RegCFRepository implements RegCFRepositoryInterface
{

     
    public function storeRegCF($data)
    {
        return RegCF::create($data);
    }

    
}