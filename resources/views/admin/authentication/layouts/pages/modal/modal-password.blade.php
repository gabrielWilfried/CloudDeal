<style>
    h5 {
        color: black;
    }

    input {
        color: #000000;
    }
</style>

<div class="modal-invisible" id="passwordModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 500px">
            <div style="background-color: #3366cc; color:white" class="modal-header">
                <h3 class="text-center mb-3"><span style="color: white" class="fa fa-lock"></span>
                    Change password</h3>
                <button type="button" id="close-modal-password"
                    class="close d-flex align-items-center justify-content-center" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <form method="post" action="{{ route('admin.profile.editPasswd') }}" style="padding: 20px"
                    name="edit-password">
                    @csrf
                    <div class="form-group mb-2">
                        <h5>Current Password <span class="text-danger">*</span></h5>
                        <input type="password" name="currentPass" class="form-control"
                            placeholder="Enter current password" required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>New Password <span class="text-danger">*</span></h5>
                        <input type="password" name="newPass" class="form-control" placeholder="Enter new password"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                        <input type="password" name="confirmPass" class="form-control"
                            placeholder="Confirm new password" required>
                    </div>
                    <div class="form-group mb-2 mt-20">
                        <button style="background-color: #3366cc; color:white " type="submit"
                            class="form-control btn  rounded submit px-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
