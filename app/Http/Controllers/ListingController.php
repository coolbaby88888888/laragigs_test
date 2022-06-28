<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        // return request();
        return view('listings.index', [
            'listing' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }
    public function show(Listing $listing){
        return view('listings.listing_item', [
            'listings' => $listing
        ]);
    }
}
