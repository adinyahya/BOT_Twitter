<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GambarController extends Controller
{
    //
    public function ajaxRequest()
    {
        return view('response-image');
    }
}
