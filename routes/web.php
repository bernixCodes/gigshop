<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

Route::get('/{id}', [ListingController::class, 'show']);


