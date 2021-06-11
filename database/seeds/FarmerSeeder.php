<?php

use Illuminate\Database\Seeder;
use App\Farmer;
use App\Profile;
use App\MasterFarmer;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = 100;
        for($a = 0; $a < $accounts; $a++){
            $masterFarmer = MasterFarmer::find(rand(1,20));
            $faker = Faker\Factory::create();
            $number = str_pad(Farmer::count() + 1, 5, 0, STR_PAD_LEFT);
            $number = $masterFarmer->account_id.'-'.$number;

            $farmer = new Farmer();
            $farmer->account_id = $number;
            $farmer->master_id = $masterFarmer->id;
            if($farmer->save()){
                $profile = new Profile();
                $profile->first_name = $faker->firstName;
                $profile->last_name = $faker->lastName;
                $profile->middle_name = $faker->lastName;
                $profile->mobile = $faker->phoneNumber;
                $profile->address = $faker->address;
                $profile->education = $faker->word(1);
                $profile->four_ps = rand(0,1);
                $profile->pwd = rand(0,1);
                $profile->indigenous = rand(0,1);
                $profile->livelihood = rand(0,1);
                $profile->farm_lot = rand(100,5000);
                $profile->farming_since = rand(1980,2019);
                $profile->organization = $faker->word(2);
                $farmer->profile()->save($profile);
            }
        }
    }
}