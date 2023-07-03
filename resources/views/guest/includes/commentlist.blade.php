
<!-- Vue des commentaires du produit -->
<div>
<h2 class="h2">CommentS</h2>
@if($ad->comments ->count() > 0)
  
    <ul class="ul">
        @foreach($ad->comments as $comment)
            <li class="li">
                <p class="p"><strong>{{ $comment->user->name }}</strong></p>
                <p class="p">{{ $comment->content }}</p>
               
        @endforeach
    </ul>
@else
    <p class="p">No comments at the moment.</p>
@endif
</div>
<div class="comment-form">
        <h5>Leave a comment</h5>
        <form action="{{ route('comments.store', ['id' => $ad->id]) }}"  method="post">
            @csrf
            <div class="form-group">
                <textarea name="comment" id="comment" rows="3" placeholder="Votre commentaire"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
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


