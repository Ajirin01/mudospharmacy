<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'http://mudospharmacy.com/pharm-confirm-prescription',
        'http://mudospharmacy.com/pharm-confirm-prescription-user',
        'http://mudospharmacy.com.ng/pharm-confirm-prescription',
        'http://mudospharmacy.com.ng/pharm-confirm-prescription-user',

    ];
}
