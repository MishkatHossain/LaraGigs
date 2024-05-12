<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

// Common Resource Routes:
// index
// show
// create
// store
// edit 
// update 
// destroy


// All listing
Route::get('/', [ListingController::class, 'index']);

// Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing data
Route::post('/listings',  [ListingController::class, 'store']); 

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Single listing
Route::get('/listings/{listing}',  [ListingController::class, 'show']); 

