
<!-- Vue des commentaires du produit -->
<h2 class="h2">Commentaires</h2>
@if($comments->count() > 0)
  
    <ul class="ul">
        @foreach($comments as $comment)
            <li class="li">
                <p class="p"><strong>{{ $comment->user->name }}</strong></p>
                <p class="p">{{ $comment->content }}</p>
               
        @endforeach
    </ul>
@else
    <p class="p">Aucun commentaire pour le moment.</p>
@endif

<style>
  
    .h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        position: relative;
        text-align:center;
        margin-top: 15px;
    }

    
    .ul {
        list-style-type: none;
        padding: 0;
    }

    
    .li {
        margin-bottom: 10px;
    }

    .li .p strong {
        font-weight: bold;
    }

    
    .li .p {
        margin: 0;
    }

    .p {
        font-style: italic;
        color: gray;
    }
</style>


