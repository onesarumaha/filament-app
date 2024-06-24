<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->delete();
        $cities = array(
        array('name' => "Bombuflat",'state_id' => 1),
        array('name' => "Garacharma",'state_id' => 1),
        array('name' => "Port Blair",'state_id' => 1),
        array('name' => "Rangat",'state_id' => 1),
        array('name' => "Addanki",'state_id' => 2),
        array('name' => "Adivivaram",'state_id' => 2),
        array('name' => "Adoni",'state_id' => 2),
        array('name' => "Aganampudi",'state_id' => 2),
        array('name' => "Ajjaram",'state_id' => 2),
        array('name' => "Akividu",'state_id' => 2),
        array('name' => "Akkarampalle",'state_id' => 2),
        array('name' => "Akkayapalle",'state_id' => 2),
        array('name' => "Akkireddipalem",'state_id' => 2),
        array('name' => "Alampur",'state_id' => 2),
        array('name' => "Amalapuram",'state_id' => 2),
        array('name' => "Amudalavalasa",'state_id' => 2),
        array('name' => "Amur",'state_id' => 2),
        array('name' => "Anakapalle",'state_id' => 2),
        array('name' => "Anantapur",'state_id' => 2),
        array('name' => "Andole",'state_id' => 2),
        array('name' => "Atmakur",'state_id' => 2),
        array('name' => "Attili",'state_id' => 2),
        array('name' => "Avanigadda",'state_id' => 2),
        array('name' => "Badepalli",'state_id' => 2),
        array('name' => "Badvel",'state_id' => 2),
        array('name' => "Balapur",'state_id' => 2),
        array('name' => "Bandarulanka",'state_id' => 2),
        array('name' => "Banganapalle",'state_id' => 2),
        array('name' => "Bapatla",'state_id' => 2),
        array('name' => "Bapulapadu",'state_id' => 2),
        array('name' => "Belampalli",'state_id' => 2),
        array('name' => "Bestavaripeta",'state_id' => 2),
        array('name' => "Betamcherla",'state_id' => 2),
        array('name' => "Bhattiprolu",'state_id' => 2),
        array('name' => "Bhimavaram",'state_id' => 2),
        array('name' => "Bhimunipatnam",'state_id' => 2),
        array('name' => "Bobbili",'state_id' => 2),
        array('name' => "Bombuflat",'state_id' => 2),
        array('name' => "Bommuru",'state_id' => 2),
        array('name' => "Bugganipalle",'state_id' => 2),
        array('name' => "Challapalle",'state_id' => 2),
        array('name' => "Chandur",'state_id' => 2),
        array('name' => "Chatakonda",'state_id' => 2),
        array('name' => "Chemmumiahpet",'state_id' => 2),
        array('name' => "Chidiga",'state_id' => 2),
        array('name' => "Chilakaluripet",'state_id' => 2),
        array('name' => "Chimakurthy",'state_id' => 2),
        array('name' => "Chinagadila",'state_id' => 2),
        array('name' => "Chinagantyada",'state_id' => 2),
        array('name' => "Chinnachawk",'state_id' => 2),
        array('name' => "Chintalavalasa",'state_id' => 2),
        array('name' => "Chipurupalle",'state_id' => 2),
        array('name' => "Chirala",'state_id' => 2),
        array('name' => "Chittoor",'state_id' => 2),
        array('name' => "Chodavaram",'state_id' => 2),
        array('name' => "Choutuppal",'state_id' => 2),
        array('name' => "Chunchupalle",'state_id' => 2),
        array('name' => "Cuddapah",'state_id' => 2),
        array('name' => "Cumbum",'state_id' => 2),
        array('name' => "Darnakal",'state_id' => 2),
        array('name' => "Dasnapur",'state_id' => 2),
        array('name' => "Dauleshwaram",'state_id' => 2),
        array('name' => "Dharmavaram",'state_id' => 2),
        array('name' => "Dhone",'state_id' => 2),
        array('name' => "Dommara Nandyal",'state_id' => 2),
        array('name' => "Dowlaiswaram",'state_id' => 2),
        array('name' => "East Godavari Dist.",'state_id' => 2),
        array('name' => "Eddumailaram",'state_id' => 2),
        array('name' => "Edulapuram",'state_id' => 2),
        array('name' => "Ekambara kuppam",'state_id' => 2),
        );
        DB::table('cities')->insert($cities);

    }
}
