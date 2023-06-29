function chatComponent() {
    return {
        discussions: [], // Les discussions récupérées depuis le backend
        searchQuery: '', // La valeur de recherche de l'utilisateur

        fetchDiscussions() {
        // Appel AJAX pour récupérer les discussions
        var userId = 2;
        fetch(`/chat/${Id}`)
            .then(response => response.json())
            .then(data => {
            this.discussions = data;
            })
            .catch(error => {
            console.error(error);
            });
        },

        get filteredDiscussions() {
        // Filtrer les discussions en fonction de la recherche de l'utilisateur
        if (this.searchQuery.trim() === '') {
            return this.discussions;
        } else {
            const searchTerm = this.searchQuery.toLowerCase();
            return this.discussions.filter(discussion => {
            // Comparer la valeur de recherche avec les discussions
            return discussion.slug.toLowerCase().includes(searchTerm);
            });
        }
        },

        // sortDiscussionsByLatestMessage() {
        // // Trier les discussions par le message le plus récent
        // this.discussions.sort((a, b) => {
        //     const lastMessageA = a.messages[a.messages.length - 1];
        //     const lastMessageB = b.messages[b.messages.length - 1];
        //     return new Date(lastMessageB.created_at) - new Date(lastMessageA.created_at);
        // });
        // }
    };
    console.log(discussions);
}
