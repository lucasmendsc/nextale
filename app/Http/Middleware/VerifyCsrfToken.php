<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $addHttpCookie = true;

    protected $except = [
     'https://www.dropgus.com.br/medias/create',
     'https://www.dropgus.com.br/tales/create',
     'https://www.dropgus.com.br/tales/update'
 ];
 
}
