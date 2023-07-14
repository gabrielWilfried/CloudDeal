<div class="modal-invisible" id="profileModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 500px">
            <div style="background-color: #87ceeb" class="modal-header">
                <h3 class="text-center mb-3"><span style="color: green" class="fas fa-pencil-alt"></span>
                    Change What You Want</h3>
                <button type="button" id="close-modal-profile"
                    class="close d-flex align-items-center justify-content-center" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <form method="post" action="{{ route('admin.category.store') }}" style="padding: 20px"
                    name="create-category">
                    @csrf
                    <div class="form-group mb-2">
                        <h5>Enter New Name <span class="text-danger">*</span></h5>
                        <input type="text" name="name" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>Enter New Speudo <span class="text-danger">*</span></h5>
                        <input type="text" name="pseudo" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>Enter New Email <span class="text-danger">*</span></h5>
                        <input type="email" name="email" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>Enter New PhoneNumber <span class="text-danger">*</span></h5>
                        <input type="text" name="phone" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>Enter New Adress <span class="text-danger">*</span></h5>
                        <input type="text" name="adress" class="form-control" placeholder="" required>
                    </div>

                    <div class="form-group mb-2 mt-20">
                        <button style="background-color: #87ceeb; " type="submit"
                            class="form-control btn  rounded submit px-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
