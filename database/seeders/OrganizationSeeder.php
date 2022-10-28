<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Glide\Manipulators\Orientation;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organization = new Organization;
        $organization->name = "Sublime Solutions";
        $organization->category = "IT";
        $organization->save();

        $organization = new Organization;
        $organization->name = "Chainraise";
        $organization->category = "Crowdfunding";
        $organization->save();
    }
}
