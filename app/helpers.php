<?php

namespace Gepard\helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class GepardHelpers
{
    public static function getIp()
    {
        return Request::ip();
    }

    public static function getCity($ip)
    {
        $location = Cookie::get('test');
        if(!isset($location))
        {
            $location = geoip($ip)->city;
            Cookie::queue('test', $location, 1);
        }

        return $location;
    }
}
