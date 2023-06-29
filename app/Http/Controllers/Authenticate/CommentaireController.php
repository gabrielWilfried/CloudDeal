<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class CommentaireController extends Controller
{
    public function store(Request $request, Annonce $annonce){

        $validators = validator::make($request->all(),[
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validators->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validators->errors()
            ], 400);
        }

        $commentaires = Comment::create([
            'content'=> $request->content,
            'user_id' => $request->user_id,
            'annonce_id'=> $annonce->id,

        ]);

    }
    //
}
