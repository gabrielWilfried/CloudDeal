<div class="modal-invisible" id="categoryModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 500px">
            <div class="modal-header">
                <h3 class="text-center mb-3">Create Category</h3>
                <button type="button" id="close-modal-button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <form method="post" action="{{ route('admin.category.store') }}"
                    style="padding: 20px" name="create-category">
                    @csrf
                    <div class="form-group mb-2">
                        <h5>Name <span class="text-danger">*</span></h5>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="description" id="textarea" class="form-control"
                                placeholder="Brief description of your Category" required></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-2 mt-20" >
                        <button type="submit" class="form-control btn btn-success rounded submit px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
