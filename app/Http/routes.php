<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\Controllers\challengerController as challenger;
Route::get('/', function () {

    $result = new challenger();
    return $result->showAllListing();

});

Route::get('/all','challengerController@showAllListing'); //http://localhost:8000/all  -- show all.

Route::get('/price','challengerController@showByListPrice');
//http://localhost:8000/price?priceSort=1  -- 1-DESC
//http://localhost:8000/price?priceSort=2  -- 2-ASC

Route::get('/updateListing','challengerController@updatingListing');
//http://localhost:8000/updateListing -- To show all listing
//http://localhost:8000/updateListing?ID=1 -- to update Listing No.1 with 'PropertyType' => 'Commercial','Bathrooms' => 10
//http://localhost:8000/updateListing?ID=2 -- to update Listing No.2 with Bedrooms' => 5,'Bathrooms' => 3
//http://localhost:8000/updateListing?ID=3 -- to update Listing No.3 with 'ListPrice' => '300000'
//http://localhost:8000/updateListing?ID=4 -- to update Listing No.4 with 'PropertyType' => 'Residential'
//http://localhost:8000/updateListing?ID=5 -- to update Listing No.5 with 'PropertyType' => 'Commercial','Bedrooms' => 4

Route::get('/photo','challengerController@showPhoto'); // http://localhost:8000/photo -- show all Photo

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
