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
                'user_id' => auth()->user()->id, // Supposons que l'utilisateur est authentifié
                'annonce_id' => $ad->id,
            ]);
            return back()->with('successCommentaire', 'Le commentaire à été ajouter avec succès.');
        }

            public function listcomment($id)
        {
            $add = Annonce::findorfail($id);
            $comments = $add->comments()->latest()->take(4)->get();
            return view('guest.includes.commentlist', compact('add', 'comments'));
        }




}
