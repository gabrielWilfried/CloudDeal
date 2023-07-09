
document.addEventListener('alpine:init', () => {
    Alpine.data('open', () => ({
        open: false,
        reason: '',
        submitForm() {
            const reason = this.reason;
            fetch(`/annonces/${5}/signaler`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ raison: reason })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
                this.open = false;
            })
            .catch(error => {
                console.error(error);
            });
        }
    }));
});
