<?php

namespace Database\Seeders;

use http\Env\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class people_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++){
            DB::table('people')->insert([
                'Imie'=> Str::random(10),
                'Nazwisko'=> Str::random(10),
                'Adres'=> Str::random(10),
                'Ulica'=> Str::random(10),
                'Kraj'=> Str::random(10),
                'Nr_telefonu'=>rand(100000000,999999999)
            ]);
        }
    }
}
