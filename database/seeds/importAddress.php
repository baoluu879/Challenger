<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class importAddress extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Address')->delete();

        $address = array(
            ['AddressID' => 1, 'FullStreetAddress' => '2251 58 Street', 'City' => 'Vinton', 'StateOrProvince' => 'IA', 'PostalCode' => '52349', 'Country' => 'US'],
            ['AddressID' => 2, 'FullStreetAddress' => '12071209 E WEBB AVENUE', 'City' => 'Burlington', 'StateOrProvince' => 'NC', 'PostalCode' => '27215', 'Country' => 'US'],
            ['AddressID' => 3, 'FullStreetAddress' => '0 UNIVERSITY DR', 'City' => 'Burlington', 'StateOrProvince' => 'NC', 'PostalCode' => '27215', 'Country' => 'US'],
            ['AddressID' => 4, 'FullStreetAddress' => '225 S ELEVENTH', 'City' => 'Mebane', 'StateOrProvince' => 'NC', 'PostalCode' => '27302', 'Country' => 'US'],
            ['AddressID' => 5, 'FullStreetAddress' => '5510 FRIEDEN CHURCH ROAD', 'City' => 'McLeansville', 'StateOrProvince' => 'NC', 'PostalCode' => '27301', 'Country' => 'US'],

        );

        // Uncomment the below to run the seeder
        DB::table('Address')->insert($address);
    }
}
