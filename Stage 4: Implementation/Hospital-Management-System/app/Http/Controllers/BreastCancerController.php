<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreastCancerController extends Controller
{
    public function breastcancer()
    {
        return view('predictions.breast-cancer');
    }
}
