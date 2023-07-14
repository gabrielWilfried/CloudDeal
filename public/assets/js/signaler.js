
document.addEventListener('alpine:init', () => {
    Alpine.data('open', () => ({
        open: true,
        reason: null,
        submitForm(adId) {
            const reason = this.reason;
            fetch(`/annonces/${adId}/signaler`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ reason: reason })

            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
                this.open = true;
                toastr.success("annonce signaler avec success")
                if(data.status === 403){
                    window.location.href = "{{ route('home') }}";
                }

            })

            .catch(error => {
                console.error(error);
                toastr.error("annonce non signaler");
            });


        }
    }));
});
