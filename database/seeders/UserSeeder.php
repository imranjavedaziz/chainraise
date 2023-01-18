<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("Google@123");
        $user->phone = "000000000";
        $user->agree_consent_electronic = true;
        $user->status = 'active';
        $user->parent_id = 1;
        $user->is_primary = true;
        $user->email_verified_at = Carbon::now();
        $user->save();
        $user->assignRole('admin');

        $user_detail = new UserDetail;
        $user_detail->user_id = $user->id;
        $user_detail->middle_name = "Middle Name";
        $user_detail->last_name = "Last Nmae";
        $user_detail->title = "Title";
        $user_detail->dob = '1992-02-15';
        $user_detail->address = "Address";
        $user_detail->suit = "Suit";
        $user_detail->city = "City";
        $user_detail->state = "State";
        $user_detail->zip = "00000";
        $user_detail->legal_formation = "Legal Formation";
        $user_detail->date_incorporation ="date_incorporation";
        $user_detail->save();
        



        // $user = new User;
        // $user->name = "investor";
        // $user->email = "investor@gmail.com";
        // $user->password = bcrypt("Google@123");
        // $user->phone = "000000000";
        // $user->agree_consent_electronic = true;
        // $user->status = 'active';
        // $user->parent_id = 2;
        // $user->is_primary = true;
        // $user->save();
        // $user->assignRole('investor');

        // $user_detail = new UserDetail;
        // $user_detail->user_id = $user->id;
        // $user_detail->middle_name = "Middle Name";
        // $user_detail->last_name = "Last Nmae";
        // $user_detail->title = "Title";
        // $user_detail->dob = '1992-02-15';
        // $user_detail->address = "Address";
        // $user_detail->suit = "Suit";
        // $user_detail->city = "City";
        // $user_detail->state = "State";
        // $user_detail->zip = "00000";
        // $user_detail->legal_formation = "Legal Formation";
        // $user_detail->date_incorporation ="date_incorporation";
        // $user_detail->save();




        // $user = new User;
        // $user->name = "issuer";
        // $user->email = "issuer@gmail.com";
        // $user->password = bcrypt("Google@123");
        // $user->phone = "000000000";
        // $user->agree_consent_electronic = true;
        // $user->status = 'active';
        // $user->parent_id = 3;
        // $user->is_primary = true;
        // $user->save();
        // $user->assignRole('issuer');


        // $user_detail = new UserDetail;
        // $user_detail->user_id = $user->id;
        // $user_detail->middle_name = "Middle Name";
        // $user_detail->last_name = "Last Nmae";
        // $user_detail->title = "Title";
        // $user_detail->dob = '1992-02-15';
        // $user_detail->address = "Address";
        // $user_detail->suit = "Suit";
        // $user_detail->city = "City";
        // $user_detail->state = "State";
        // $user_detail->zip = "00000";
        // $user_detail->legal_formation = "Legal Formation";
        // $user_detail->date_incorporation ="date_incorporation";
        // $user_detail->save();



        // $user = new User;
        // $user->name = "issuer2";
        // $user->email = "issuer2@gmail.com";
        // $user->password = bcrypt("Google@123");
        // $user->phone = "000000044";
        // $user->agree_consent_electronic = true;
        // $user->status = 'active';
        // $user->parent_id = 3;
        // $user->is_primary = true;
        // $user->save();
        // $user->assignRole('issuer');


        // $user_detail = new UserDetail;
        // $user_detail->user_id = $user->id;
        // $user_detail->middle_name = "Middle Name";
        // $user_detail->last_name = "Last Nmae";
        // $user_detail->title = "Title";
        // $user_detail->dob = '1992-02-15';
        // $user_detail->address = "Address";
        // $user_detail->suit = "Suit";
        // $user_detail->city = "City";
        // $user_detail->state = "State";
        // $user_detail->zip = "00000";
        // $user_detail->legal_formation = "Legal Formation";
        // $user_detail->date_incorporation ="date_incorporation";
        // $user_detail->save();
    }
}
