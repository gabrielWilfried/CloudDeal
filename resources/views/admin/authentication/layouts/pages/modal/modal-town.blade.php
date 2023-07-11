<div class="modal-invisible" id="categoryModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 500px">
            <div class="modal-header">
                <h3 class="text-center mb-3">Create Town</h3>
                <button type="button" id="close-modal-button"
                    class="close d-flex align-items-center justify-content-center" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <form method="post" action="{{ route('admin.town.store') }}" style="padding: 20px">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Enter name</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="description" id="textarea" class="form-control" placeholder="Brief description of your town">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group mb-2 mt-20">
                        <button type="submit" class="form-control btn btn-success rounded submit px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
