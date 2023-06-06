<?php
    namespace App\Http\Controllers\CRUD;

    use App\Models\Region;
    use Illuminate\Http\Request;

    class RegionController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('admin')->only(['update', 'destroy']);
        }

        public function index()
        {
            $regions = Region::all();
            return response()->json($regions);
        }

        public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|text|size:1000'
            ]);

            $region = Region::create($request->all());

            return response()->json($region, 201);
        }

        public function show($id)
        {
            $region = Region::findOrFail($id);
            return response()->json($region);
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|text|size:1000'
            ]);

            $region = Region::findOrFail($id);
            $region->update($request->all());

            return response()->json($region);
        }

        public function destroy($id)
        {
            $region = Region::findOrFail($id);
            $region->delete();

            return response()->json(['message' => 'Ville deleted']);
        }

}
