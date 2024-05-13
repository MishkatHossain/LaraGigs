<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// Common Resource Routes:
// index    show all listings
// show     show single listings
// create   Show form to create new listing
// store    store new listing
// edit     show form to edit listing
// update   update listing
// destroy  delete listing 


// All listing                              index
Route::get('/', [ListingController::class, 'index']);

// Show Create form                         create
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing data                        store
Route::post('/listings',  [ListingController::class, 'store']); 

//Show Edit form                            edit
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit Submitting Route[Update Listing]     update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single listing                            show
Route::get('/listings/{listing}',  [ListingController::class, 'show']); 


//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User out
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/login', [UserController::class,'login']);


