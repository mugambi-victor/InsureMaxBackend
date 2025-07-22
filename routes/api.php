<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/products', function () {
    return response()->json([
    [
        'id' => 'prod_001',
        'name' => 'Premium Health Plan',
        'type' => 'HEALTH',
        'coverage' => 'Full medical + dental',
        'price' => 200.00,
    ],
    [
        'id' => 'prod_002',
        'name' => 'Family Life Plan',
        'type' => 'LIFE',
        'coverage' => 'Family + accidental',
        'price' => 150.00,
    ],
    [
        'id' => 'prod_003',
        'name' => 'Standard Auto Insurance',
        'type' => 'AUTO',
        'coverage' => 'Collision + liability',
        'price' => 120.00,
    ],
    [
        'id' => 'prod_004',
        'name' => 'Home Protection Plan',
        'type' => 'PROPERTY',
        'coverage' => 'Fire + theft + flood',
        'price' => 180.00,
    ],
    [
        'id' => 'prod_005',
        'name' => 'Travel Secure Package',
        'type' => 'TRAVEL',
        'coverage' => 'International + medical',
        'price' => 90.00,
    ],


    ]);
});

