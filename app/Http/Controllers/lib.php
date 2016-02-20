<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class lib extends Controller
{
    public function getListing($ID){
        $query = DB::select("select * from Listing where AddressID = '$ID'");
        return $query;
    }

    public function getPhoto($ID){
        $query = DB::select("select * from Photo where AddressID = '$ID'");
        return $query;
    }

    public function getDescription($ID){
        $query = DB::select("select * from Description where AddressID = '$ID'");
        return $query;
    }

    public function getMLS($ID){
        $query = DB::select("select * from MLS where AddressID = '$ID'");
        return $query;
    }

    public function getAddress(){
        $query = DB::select("select * from Address");
        return $query;
    }
}
