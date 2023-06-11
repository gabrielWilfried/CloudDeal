<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{
    public function index(Request $request)
    {
    }

    public function store(Request $request, Annonce $annonce)
    {
        do {
            $slug = Str::slug($annonce->name);
        } while (Discussion::where('slug', $slug)->first());

        $discussion = Discussion::create([
            'slug' => $slug,
            'annonce_id' => $annonce->id,
            'user_id' => auth()->id()
        ]);

        return response()->json($discussion, 200);
    }

    public function update()
    {
    }

    public function view(Discussion $discussion)
    {
        if ($discussion->annonce->user_id != auth()->id() && $discussion->user_id != auth()->id())
            abort(403);

        $discussion->load('messages');
        return response()->json($discussion, 200);
    }

    public function delete()
    {
    }
}
