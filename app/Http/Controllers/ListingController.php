<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return view('listings.index', [
            'listings'=> listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(listing $id){
        return view ('listings.show', [
            'listing' => $id
        ]);
    }

}
