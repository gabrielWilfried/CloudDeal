<script src="{{ asset('assets/custom/js/signal.js') }}"></script>

<div class="modal-dialog modal-dialog-centered" x-data="open">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="comment-form">
            <form method="post" action="{{ route('annonces.signaler', ['id' => $ad->id]) }}" x-show="open" @submit.prevent="open = false" >
                @csrf
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="form-group">
                    <h5>Leave a reason</h5>
                    <textarea name="raison" id="reason" class="contact-textarea" cols="30" rows="5" placeholder="Your reason"  x-model="reason" required='required'></textarea>
                </div>
                <button type="submit" id="btnform" class="btn btn-primary" x-on:click="submitForm({{ $ad->id }})"data-dismiss="modal" aria-label="Close">Submit</button>
            </form>
        </div>

    </div>
</div>



