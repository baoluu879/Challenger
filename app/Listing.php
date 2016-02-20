<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'ListPrice', 'ListingURL', 'Bedrooms','Bathrooms','PropertyType','ListingKey','ListingCategory','ListingStatus'
    ];
}
