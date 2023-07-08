<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Discussion;
use App\Models\Message;
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
        //dd($discussions);
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

    public function getMessages(Request $request, Discussion $discussion)
    {

        $messages = $discussion->messages;
        //dd($messages);
        return response()->json($messages);
    }

    public function createMessage(Request $request, Discussion $discussion)
    {
        $userId = 1;
        $annonce = $discussion->annonce;
        $message = new Message();
        $message->content = $request->input('content');
        $message->discussion_id = $discussion->id;
        if ($userId == $annonce->user_id) {
            $message->seller_id = $discussion->id;
        }else{
            $message->customer_id = $discussion->id;
        }
        $message->save();
        return response()->json(['message' => $message], 200);
    }
}
