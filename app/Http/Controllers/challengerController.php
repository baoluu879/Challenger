<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\lib as lib;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class challengerController extends Controller
{
    public function showAllListing(){
        $temp = new lib();
        //$result = [];
        $result = $temp->getAddress();
        //var_dump($result);

            foreach ($result as $a =>$b) {
                $address = $b->AddressID;
                $b->listing = ($temp->getListing($address));
                $b->photo = $temp->getPhoto($address);
                $b->description = $temp->getDescription($address);
                $b->mls = $temp->getMLS($address);
            }


        return $result;
    }

    public function showByListPrice(){
        $flag = Input::get('priceSort'); // 1 = DESC , 2 = ASC

        $temp = new lib();
        $result = $temp->getAddress();
        foreach($result as &$a){
            $address = $a->AddressID;
            $a->listing = $temp->getListing($address);
            $a->photo = $temp->getPhoto($address);
            $a->description = $temp->getDescription($address);
            $a->mls = $temp->getMLS($address);
        }
        foreach($result as $i => $j){
            $cities[$i] = $j->City;
            foreach($j->listing as $b){
                $price[$i] = ($b->ListPrice);
            }
        }
        switch($flag){
            case 1:
                array_multisort($price,SORT_DESC,SORT_STRING,$result);
                return $result;
                break;
            case 2:
                array_multisort($price,SORT_ASC,SORT_STRING,$result);
                return $result;
                break;
            default:
                echo "something is wrong";
        }
    }

    public function showPhoto(){
        $query = DB::select("select PhotoID,MediaModificationTimestamp,MediaURL from Photo");
        return $query;
    }

    public function updatingListing(){
        $ID = Input::get('ID');
        switch($ID){
            case 1:
                DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')->update(['PropertyType' => 'Commercial','Bathrooms' => 10]);
                echo "done with updating listing {$ID} \n";
                return (DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')
                    ->get());
                break;
            case 2:
                DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')->update(['Bedrooms' => 5,'Bathrooms' => 3]);
                echo "done with updating listing {$ID} \n";
                return (DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')
                    ->get());
                break;
            case 3:
                DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')->update(['ListPrice' => '300000']);
                echo "done with updating listing {$ID} \n";
                return (DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')
                    ->get());
                break;
            case 4:
                DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')->update(['PropertyType' => 'Residential']);
                echo "done with updating listing {$ID} \n";
                return (DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')
                    ->get());
                break;
            case 5:
                DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')->update(['PropertyType' => 'Commercial','Bedrooms' => 4]);
                echo "done with updating listing {$ID} \n";
                return (DB::table('Listing')
                    ->where('ListingID', "$ID")->where('ListingStatus', 'Active')
                    ->get());
                break;
            default:

                return (DB::table('Listing')
                    ->where('ListingStatus', 'Active')
                    ->get());
                break;
        }
    }
}
