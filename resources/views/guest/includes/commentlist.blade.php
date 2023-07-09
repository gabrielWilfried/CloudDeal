<!-- Vue des commentaires du produit -->
     <div class="comments-section">
        <h2 class="comments-title">Commentaires</h2>
        @if ($comments->count() > 0)
             @foreach ($comments as $comment)
                <div class="comments-list">
                    <div class="comment">
                        <div class="comment-header">
                            <span class="comment-author">{{ $comment->user->name }}</span>
                            <span class="comment-date">{{ $comment->created_at }}</span>
                        </div>
                        <div class="comment-content">
                            <p> {{ $comment->content }}</p>
                        </div>
                    </div>
                </div>
             @endforeach
         @else
            <div class="comment-content">
                <p> {{ $comment->content }}</p>
            </div>
        @endif
    </div>

<style>

.comments-section {
  margin-top: 25px;
  height: 400px;

}

.comments-title {
  font-size: 25px;
  font-weight: bold;
  margin-bottom: 10px;
  margin-top: 25px;
}

.comments-list {
  border: 1px solid #ccc;
  border-bottom: none;
  padding: 10px;
}

.comment {
  margin-bottom: 20px;
}

.comment-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 5px;
}

.comment-author {
  font-weight: bold;
}

.comment-date {
  color: #dd1919;
}

.comment-content {
  margin-bottom: 10px;
}

</style>
