<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $city = City::where('name', 'Izhevsk')->first();
        if(!$city)
        {
            $city = new City(['name' => 'Izhevsk', 'label' => 'Ижевск']);
            $city->timestamps;
        }

        $city->save();
    }
}
