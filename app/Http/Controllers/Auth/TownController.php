<?php
    namespace App\Http\Controllers\CRUD;

    use App\Models\Town;
    use Illuminate\Http\Request;

    class TownController extends Controller
    {


        public function index()
        {
            $towns = Town::all();
            return response()->json($towns);
        }

        public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required|string|max:255',
                'description' => 'required|text|size:1000'
            ]);

            $region = Town::create($request->all());

            return response()->json($town, 201);
        }

        public function show($name)
        {
            $town = Town::findOrFail($name);
            return response()->json($town);
        }
        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('is_admin')->only(['update', 'destroy']);
        }

        public function update(Request $request, $id)
        {
            $user = User::find($user_id);
            $is_admin = $user->is_admin;
            if($is_admin == true){
                $request->validate([
                    'nom' => 'required|string|max:255',
                    'description' => 'required|text|size:1000'
                ]);

                $town = Town::findOrFail($id);
                $town->update($request->all());

                return response()->json($town);
            }
            return response()->json(['message' => 'Pas de droit pour cette action']);
        }

        public function destroy($id)
        {
            $user = User::find($user_id);
            $is_admin = $user->is_admin;
            if ($is_admin == true){
                $town = Town::findOrFail($id);
                $town->delete();

                return response()->json(['message' => 'Ville deleted']);
            }
             return response()->json(['message' => 'Pas de droit pour cette action']);
        }

}
