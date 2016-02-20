<?php

use Illuminate\Database\Seeder;

class importDescription extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Description')->delete();

        $description = array(
            ['ID'=>'1', 'AddressID' => 1, 'DiscloseAddress' => false, 'ListingDescription' => 'Excellent location and view. Multi level home with lots of space! Large masonry fireplace,
            living room and family room. 2.26 acres gives you lots of room for your hobby farm project!'],
            ['ID'=>'2', 'AddressID' => 2, 'DiscloseAddress' => true, 'ListingDescription' => 'Possible Owner Financing. Property consists of 2 units which are being leased for
            $600/unit.1 water heater,1 gas meter,2 water meters,2 electrical main panels in basement,Shared parking.Basement not included
            in square footage. Storage. New 20 year roof on entire building and new a/c for 1207 installed 06/10.'],
            ['ID'=>'3', 'AddressID' => 3, 'DiscloseAddress' => true, 'ListingDescription' => 'Zoning allows for many commercial uses. Located on one of the 4 corners at University Dr.
            &amp; I-40/85 with great interstate access &amp; exposure. Near University Commons &amp; Alamance Crossing retail
            centers. Convenient to Elon Univ. and main entrance to the 600-acre Mackintosh on the Lake S/D.'],
            ['ID'=>'4', 'AddressID' => 4, 'DiscloseAddress' => true, 'ListingDescription' => 'Located just outside Mebane city limits but inside ETJ. Convenient to downtown Mebane &amp;
            Tanger Outlets (1.2 miles), restaurants, grocery stores, healthcare &amp; pharmacies. Less than 2 miles to
            I-40/85 access! Great location for multifamily or SFR development.'],
            ['ID'=>'5', 'AddressID' => 5, 'DiscloseAddress' => true, 'ListingDescription' => 'Great site for development. Lots of road frontage. Located across from shopping at a four
            way intersection. There is a 1,344 sq. ft. former Post Office building also on the site. Septic tank does not work.'],
            );

        // Uncomment the below to run the seeder
        DB::table('Description')->insert($description);
    }
}
