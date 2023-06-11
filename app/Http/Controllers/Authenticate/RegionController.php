<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Enums\PathFileEnum;
use App\Models\Region;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegionController extends Controller
{

    public function store(Request $request)
    {
        $validateRegion = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255'
            ]
        );

        if ($validateRegion->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateRegion->errors()
            ], 401);
        }

        $region = Region::create($request->all());

        return response()->json($region, 201);
    }

    public function update(Request $request, Region $region)
    {
        $validateRegion = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255'
            ]
        );

        if ($validateRegion->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateRegion->errors()
            ], 401);
        }

        $region->update($request->all());

        return response()->json($region);
    }

    public function delete(Region $region)
    {
        $region->delete();
        return response()->noContent();
    }
}
