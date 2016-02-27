<?php
namespace striedinger\PayUButton\Facades;

use Illuminate\Support\Facades\Facade;

class Payu extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'Payu';
    }
}