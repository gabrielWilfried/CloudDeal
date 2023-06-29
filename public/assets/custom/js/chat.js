window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        searchQuery: '', // La valeur de recherche de l'utilisateur

        fetchDiscussions() {
            fetch(`/chat/${1}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    this.discussions = data.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }));
});
