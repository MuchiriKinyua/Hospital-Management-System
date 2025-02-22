<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FluController extends Controller
{
    public function flu()
    {
        return view('predictions.flu');
    }
}
