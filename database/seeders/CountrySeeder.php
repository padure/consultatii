<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://restcountries.com/v3.1/all');
        foreach (json_decode($response) as $country){
            Country::create([
                "name" => $country->name->official,
                "currencies" => !empty($country->currencies)?reset($country->currencies)->name:null,
                "region" => $country->region,
                "population" => $country->population
            ]);
        }
    }
}
