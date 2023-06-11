<?php
    namespace App\Http\Controllers\CRUD;

    use App\Models\Region;
    use App\Models\User;
    use Illuminate\Http\Request;

    class RegionController extends Controller
    {





        public function index()
        {
            $regions = Region::all();
            return response()->json($regions);
        }

        public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|text|max:1000'
            ]);

            $region = Region::create($request->all());

            return response()->json($region, 201);
        }

        public function show($name)
        {
            $region = Region::findOrFail($name);
            return response()->json($region);
        }



        public function update(Request $request, $id)
        {
            $user = User::find($user_id);
            $is_admin = $user->is_admin;
            if($is_admin==true){

                $request->validate([
                    'nom' => 'required|string|max:255',
                    'description' => 'required|text|size:1000'
                ]);

                $region = Region::findOrFail($id);
                $region->update($request->all());

                return response()->json($region);
            }
            return response()->json(['message' => 'Pas de droit pour cette action']);
        }

        public function destroy($id)
        {
            $user = User::find($user_id);
            $is_admin = $user->is_admin;
            if($is_admin==true){
                $region = Region::findOrFail($id);
                $region->delete();

                return response()->json(['message' => 'Ville deleted']);
            }
            return response()->json(['message' => 'Pas de droit pour cette action']);
        }

}
