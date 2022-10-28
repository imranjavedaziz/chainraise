<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offers = new Offer;
        $offers->name = "admin";
        $offers->email = "admin@gmail.com";
        $offers->save();
    }
}
