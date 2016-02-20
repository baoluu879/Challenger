<?php

use Illuminate\Database\Seeder;

class importListing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Listing')->delete();

        $listing = array(
            ['ListingID' => 1,'AddressID' => 1, 'ListPrice' => '154900', 'ListingURL' => 'http://listings.listhub.net/pages/BCMLSIA/12777/?channel=passfail', 'Bedrooms' => 3, 'Bathrooms' => 3, 'PropertyType' => 'Residential',
              'ListingKey'=> '3yd-BCMLSIA-12777','ListingCategory' => 'Purchase', 'ListingStatus' => 'Active'],
            ['ListingID' => 2,'AddressID' => 2, 'ListPrice' => '125000', 'ListingURL' => 'http://listings.listhub.net/pages/BABORNC/54149/?channel=passfail', 'Bedrooms' => 0, 'Bathrooms' => 0, 'PropertyType'=>'Commercial',
                'ListingKey' => '3yd-BABORNC-54149', 'ListingCategory' => 'Purchase', 'ListingStatus' => 'Active' ],
            ['ListingID' => 3,'AddressID' => 3, 'ListPrice' => '2600000', 'ListingURL' => 'http://listings.listhub.net/pages/BABORNC/59140/?channel=passfail', 'Bedrooms' => 0, 'Bathrooms' => 0, 'PropertyType'=>'Lots And Land',
                'ListingKey' => '3yd-BABORNC-59140', 'ListingCategory' => 'Purchase', 'ListingStatus' => 'Active' ],
            ['ListingID' => 4,'AddressID' => 4, 'ListPrice' => '325000', 'ListingURL' => 'http://listings.listhub.net/pages/BABORNC/66535/?channel=passfail', 'Bedrooms' => 0, 'Bathrooms' => 0, 'PropertyType'=>'Lots And Land',
                'ListingKey' => '3yd-BABORNC-66535', 'ListingCategory' => 'Purchase', 'ListingStatus' => 'Active' ],
            ['ListingID' => 5,'AddressID' => 5, 'ListPrice' => '199900', 'ListingURL' => 'http://listings.listhub.net/pages/BABORNC/71218/?channel=passfail', 'Bedrooms' => 0, 'Bathrooms' => 0, 'PropertyType'=>'Lots And Land',
                'ListingKey' => '3yd-BABORNC-71218', 'ListingCategory' => 'Purchase', 'ListingStatus' => 'Active' ],
        );

        // Uncomment the below to run the seeder
        DB::table('Listing')->insert($listing);
    }
}
