<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center mb-3">Boost your Ad</h3>
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close" id="closed-boost-modal">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <div class="text-success text-center"><i class="fa fa-rocket fa-5x"></i></div>
                <form id="boost-form" action="{{ route('admin.ads.boost', $annonce->id) }}" method="post"
                    class="signup-form" style="padding: 20px">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name">Enter your boost price</label>
                        <input type="text" name="price" class="form-control" placeholder="0XAF">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Start date</label>
                        <input type="date" name="start_at" id="start_at" class="form-control"
                            placeholder="12/22/2023">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">End date</label>
                        <input type="date" name="end_at" class="form-control" placeholder="12/22/2023">
                    </div>
                    <div class="form-group mb-2 mt-20">
                        <button type="submit" class="form-control btn btn-success rounded submit px-3">Boost</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
