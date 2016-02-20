<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class importPhoto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Photo')->delete();

        $photo = array(
            ['PhotoID' => 1,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/1?lm=20160106T175645'],
            ['PhotoID' => 2,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/2?lm=20160106T175645'],
            ['PhotoID' => 3,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/3?lm=20160106T175645'],
            ['PhotoID' => 4,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/4?lm=20160106T175645'],
            ['PhotoID' => 5,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/5?lm=20160106T175645'],
            ['PhotoID' => 6,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/6?lm=20160106T175645'],
            ['PhotoID' => 7,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/7?lm=20160106T175645'],
            ['PhotoID' => 8,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/8?lm=20160106T175645'],
            ['PhotoID' => 9,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/9?lm=20160106T175645'],
            ['PhotoID' => 10,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/10?lm=20160106T175645'],
            ['PhotoID' => 11,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/11?lm=20160106T175645'],
            ['PhotoID' => 12,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/12?lm=20160106T175645'],
            ['PhotoID' => 13,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/13?lm=20160106T175645'],
            ['PhotoID' => 14,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/14?lm=20160106T175645'],
            ['PhotoID' => 15,'AddressID' => 1, 'MediaModificationTimestamp' => '2016-01-06T17:56:45+00:00', 'MediaURL' => 'http://photos.listhub.net/BCMLSIA/12777/15?lm=20160106T175645'],
            ['PhotoID' => 16,'AddressID' => 2, 'MediaModificationTimestamp' => '2013-11-13T21:26:38+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/54149/1?lm=20131113T212638'],
            ['PhotoID' => 17,'AddressID' => 4, 'MediaModificationTimestamp' => '2015-01-14T23:24:26+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/66535/1?lm=20150114T232426'],
            ['PhotoID' => 18,'AddressID' => 4, 'MediaModificationTimestamp' => '2015-01-14T23:24:26+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/66535/2?lm=20150114T232426'],
            ['PhotoID' => 19,'AddressID' => 4, 'MediaModificationTimestamp' => '2015-01-14T23:24:26+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/66535/3?lm=20150114T232426'],
            ['PhotoID' => 20,'AddressID' => 4, 'MediaModificationTimestamp' => '2015-01-14T23:24:26+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/66535/4?lm=20150114T232426'],
            ['PhotoID' => 21,'AddressID' => 5, 'MediaModificationTimestamp' => '2011-02-24T03:17:09+00:00', 'MediaURL' => 'http://photos.listhub.net/BABORNC/71218/1?lm=20110224T031709'],
        );

        // Uncomment the below to run the seeder
        DB::table('Photo')->insert($photo);
    }
}
