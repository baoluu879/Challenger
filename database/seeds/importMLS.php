<?php

use Illuminate\Database\Seeder;

class importMLS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MLS')->delete();

        $mls = array(
            ['MlsID'=>'BCMLSIA','AddressID' => 1, 'MlsName' => 'Benton County Multiple Listing Service', 'MlsNumber' => '12777'],
            ['MlsID'=>'BABORNC','AddressID' => 2, 'MlsName' => 'Burlington Alamance Board of Realtors', 'MlsNumber' => '54149'],
            ['MlsID'=>'BABORNC','AddressID' => 3, 'MlsName' => 'Burlington Alamance Board of Realtors', 'MlsNumber' => '59140'],
            ['MlsID'=>'BABORNC','AddressID' => 4, 'MlsName' => 'Burlington Alamance Board of Realtors', 'MlsNumber' => '66535'],
            ['MlsID'=>'BABORNC','AddressID' => 5, 'MlsName' => 'Burlington Alamance Board of Realtors', 'MlsNumber' => '71218'],
        );

        // Uncomment the below to run the seeder
        DB::table('MLS')->insert($mls);
    }
}
