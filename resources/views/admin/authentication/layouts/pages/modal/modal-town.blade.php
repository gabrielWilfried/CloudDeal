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
                <form method="post" action="{{ route('admin.town.store') }}" name="create-town" style="padding: 20px">
                    @csrf
                    <div class="form-group mb-2">
                        <h5>Name <span class="text-danger">*</span></h5>
                        <input type="text" name="name" class="form-control" required placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <h5>Region <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="region_id" id="select" required class="form-control">
                                @forelse ($regions as $region)
                                    <option
                                     value="{{ $region->id}}">{{ $region->name}}</option>
                                @empty
                                    <option>No Region</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="description" required id="textarea" class="form-control" placeholder="Brief description of your town"></textarea>
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
