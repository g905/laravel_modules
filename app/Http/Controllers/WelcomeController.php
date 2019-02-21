<?php

namespace Gepard\Http\Controllers;

use Gepard\helpers\GepardHelpers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $city = GepardHelpers::getCity($request->ip());

        return view('welcome', ['location' => $city]);
    }
}
