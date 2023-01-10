<?php

namespace Database\Seeders;

use App\Models\Accreditation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accreditation = new Accreditation; 
        $accreditation->title = "My Individual Income is";
        $accreditation->amount = 200000;
        $accreditation->years = "(for each of the last 2 years)";
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-user-friends';
        $accreditation->save();


        $accreditation = new Accreditation; 
        $accreditation->title = "My Joint Income with spouse is";
        $accreditation->amount = 300000;
        $accreditation->years = "(for each of the last 2 years)";
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-user-friends';
        $accreditation->save();



        $accreditation = new Accreditation; 
        $accreditation->title = "My individual Net Worth or joint with spouse is";
        $accreditation->amount = 1000000;
        $accreditation->years = "(excluding primary residence)";
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-building';
        $accreditation->save();


        $accreditation = new Accreditation; 
        $accreditation->title = "I own Total Investments";
        $accreditation->amount = 5000000;
        $accreditation->years = "(including jointly with spouse)";
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-user';
        $accreditation->save();


        $accreditation = new Accreditation; 
        $accreditation->title = "I am a licensed individual that holds an active Series 7, Series 65, or Series 82 registration";
        $accreditation->amount = null;
        $accreditation->years = null;
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-user';
        $accreditation->save();



        $accreditation = new Accreditation; 
        $accreditation->title = "I am not an Accredited Investor";
        $accreditation->amount = null;
        $accreditation->years = null;
        $accreditation->description = null;
        $accreditation->icon = 'fas fa-user';
        $accreditation->save();

    }
}
