<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class CommentaireController extends Controller
{
    public function store(Request $request, $ad){

        $validators = validator::make($request->all(),[
            'content' => 'required',
            //'user_id' => 'required|exists:users,id',
            //'user_id' => 'exists:users,id',
        ]);

        /*if ($validators->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validators->errors()
            ], 400);
        }*/ 
        $ad = Annonce::findorfail($ad);
        $commentaires = Comment::create([
            'content'=> $request->comment,
           // 'user_id' => $request->user_id,
           'user_id' => optional($request->user_id)->id ?? 1, 
            'annonce_id'=> $ad->id

        ]);
        $commentaires->save();

            // Redirection vers la page de l'annonce après l'ajout du commentaire
            return back()->with('success', 'Le commentaire a été ajouté avec succès.');


    }
    //
    
}
