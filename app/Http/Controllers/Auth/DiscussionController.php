<?php
use App\Models\Discussion;
use App\Models\Annonce;
use App\Models\User;

use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function create(Request $request)
    {
        // Récupérer l'annonce à partir de l'ID
        $annonce = Annonce::findOrFail($request->input('annonce_id'));

        // Récupérer l'utilisateur qui a créé l'annonce
        $user1Id = $annonce->user_id;

        // Récupérer l'utilisateur actuellement authentifié
        $user2Id = $request->user()->id;

        // Créer une nouvelle discussion
        $discussion = new Discussion();
        $discussion->user1_id = $user1Id;
        $discussion->user2_id = $user2Id;
        // Autres attributs de la discussion
        $discussion->save();

        // Répondre avec la discussion créée
        return response()->json($discussion, 201);
    }
    public function getUserDiscussions($userId)
    {
        // Récupérer l'utilisateur spécifié
        $user = User::findOrFail($userId);

        // Récupérer les discussions associées à l'utilisateur
        $discussions = $user->discussions;

        // Répondre avec la liste des discussions
        return response()->json($discussions);
        // return $discussions->toArray();
    }
    public function destroy($id)
    {
        // Trouver la discussion à supprimer
        $discussion = Discussion::findOrFail($id);

        // Supprimer la discussion
        $discussion->delete();

        // Répondre avec un message de succès
        return response()->json(['message' => 'Discussion supprimée avec succès']);
        // return $discussions->toArray();
    }
}
