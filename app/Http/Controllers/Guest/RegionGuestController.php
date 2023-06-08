<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionGuestController extends Controller
{

    public function listRegions()
    {
        $regions = Region::all();
        return response()->json($regions);
    }
}
