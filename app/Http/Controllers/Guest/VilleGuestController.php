<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;

class VilleGuestController extends Controller
{
    public function listVilles()
    {
        $towns = Town::all();
        return response()->json($towns);
    }
}
