<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Ad</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this ad?&hellip;</p>
        </div>
        <div class="modal-footer">
          <form name="delete-ad-form" method="post" action="{{ route('admin.ads.delete', ['annonce' =>$annonce]) }}">
            @method('DELETE')
            @csrf
            <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-rounded btn-info float-right">Delete</button>
          </form> 
        </div>
      </div>
    </div>
</div>
