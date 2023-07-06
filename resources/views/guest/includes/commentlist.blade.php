<!-- Vue des commentaires du produit -->
<div>
    <h2 class="h2">Commentaires</h2>
    @if ($ad->comments->count() > 0)
        <ul class="ul">
            @foreach ($ad->comments as $comment)
                <li class="li">
                    <p class="p"><strong>{{ $comment->user->name }}</strong></p>
                    <p class="p">{{ $comment->content }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p class="p">Aucun commentaire pour le moment.</p>
    @endif
</div>
