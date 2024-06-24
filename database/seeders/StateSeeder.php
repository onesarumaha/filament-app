<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => "Andaman and Nicobar Islands",'country_id' => 101),
            array('name' => "Andhra Pradesh",'country_id' => 101),
            array('name' => "Arunachal Pradesh",'country_id' => 101),
            array('name' => "Assam",'country_id' => 101),
            array('name' => "Bihar",'country_id' => 101),
            array('name' => "Chandigarh",'country_id' => 101),
            array('name' => "Chhattisgarh",'country_id' => 101),
        );
        DB::table('states')->insert($states);
    }
}
