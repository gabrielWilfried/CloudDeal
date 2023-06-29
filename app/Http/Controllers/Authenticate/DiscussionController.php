<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{

    public function ListDiscussion(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);
        $userId =2;
        if ($annonce->user_id == $userId)
        {
            $discussions = $annonce->discussions()
            ->leftJoin('messages', 'discussions.id', '=', 'messages.discussion_id')
            ->orderByDesc('messages.created_at')
            ->get();

            return view('user.layouts.partials.chat', compact('discussion'));
        }
        else
        {
            $discussions = $annonce->discussions()
            ->where('user_id', $userId)
            ->leftJoin('messages', 'discussions.id', '=', 'messages.discussion_id')
            ->orderByDesc('messages.created_at')
            ->get();
            return response()->json($discussions, 200);
        }

    }

    public function store(Request $request, Annonce $annonce)
    {
        $userId =2;
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
        $userId =2;
        if ($discussion->annonce->user_id != $userId && $discussion->user_id != $userId )
            abort(403);

        $discussion->load('messages');
        return response()->json($discussion, 200);
    }


    public function delete()
    {
    }
}
