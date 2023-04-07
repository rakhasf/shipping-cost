<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\app\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileKota = file_get_contents(base_path('/database/kota.json'));
        $fileKabupaten = file_get_contents(base_path('/database/kabupaten.json'));

        $dataKota = json_decode($fileKota, true);
        $dataKabupaten = json_decode($fileKabupaten, true);

        City::insert($dataKota);
        City::insert($dataKabupaten);

    }
}
