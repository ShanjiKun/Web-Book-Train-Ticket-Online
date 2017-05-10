<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'search-trip',
        'get-train-name-via-trip',
        'get-train-time-via-station',
        'get-number-seat',
        'get-cars',
        'get-seat',
        'pick-seat',
        'unpickSeat',
        'postOwnTime',
        'postOwnTime24H',
        'postBillOwnTime',
        'getUser',
        'updatePassengerInfo'
    ];
}
