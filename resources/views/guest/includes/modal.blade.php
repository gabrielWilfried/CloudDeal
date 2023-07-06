<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times</span>
        </button>
        <div class="comment-form">
        <form method="post" action="{{ route('annonces.signaler', ['id' => $ad->id]) }}">
            @csrf
            <div class="form-group">
                <h5>Leave a reason</h5>
                <textarea name="raison" id="comment" cols="30" rows="5" placeholder="your reason" required="required" ></textarea>
            </div>
            <button type="submit" id="btnform" class="btn btn-primary">Soumettre</button>
        </form>
        </div>   
    </div>
</div>
