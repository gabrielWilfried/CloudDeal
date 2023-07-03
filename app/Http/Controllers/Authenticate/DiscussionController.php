<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{


    public function index(Request $request, Annonce $annonce)
    {
        return view('guest.layouts.pages.chat');
    }

    public function ListDiscussion(Request $request, Annonce $annonce)
    {
        $discussions = $annonce->discussions()->with('messages')->paginate(5);
        return response()->json($discussions);
    }

    public function store(Request $request, Annonce $annonce)
    {
        $userId = 2;
        do {
            $slug = Str::slug($annonce->name);
        } while (Discussion::where('slug', $slug)->first());

        $discussion = Discussion::create([
            'slug' => $slug,
            'annonce_id' => $annonce->id,
            'user_id' => $userId
        ]);

        return response()->json($discussion, 200);
    }

    public function update()
    {
    }

    public function view(Discussion $discussion)
    {
        $userId = 2;
        if ($discussion->annonce->user_id != $userId && $discussion->user_id != $userId)
            abort(403);

        $discussion->load('messages');
        return response()->json($discussion, 200);
    }


    public function delete()
    {
    }
}
