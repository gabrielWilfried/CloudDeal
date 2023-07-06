<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class CommentaireController extends Controller
{

        public function store(Request $request, $ad)
        {
            $request->validate([
                'comment' => 'required',
            ]);
            

            $ad = Annonce::findOrFail($ad);
            
            $comment = Comment::create([
                'content' => $request->comment,

                'user_id' => optional($request->user_id)->id ?? 1, 
            // 'user_id' => auth()->user()->id, // Supposons que l'utilisateur est authentifié
                'annonce_id' => $ad->id,
            ]);
            return back()->with('successCommentaire', 'Le commentaire à été ajouter avec succès.');
        }

  /*  public function listcomment($id)
    {
        $ad = Annonce::findOrFail($id);
        $ad->load('comments');
        return response()->json($ad->comments);
    } */
    public function listcomment($id)
{
    $ad = Annonce::findorfail($id);
        $ad->load('comments');
    return view('your-view', compact('ad', 'comments'));
}

  

    
}
