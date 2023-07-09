window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        selectedDiscussion: null,
        messages: [],
        discussionMessage: [],
        currentDiscussion: null,
        discussionSlug: '',
        currentUser: 1,
        searchQuery: '',
        newMessage: '',
        filteredDiscussions: [],

        fetchDiscussions() {
            fetch(`/chat/${1}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;
                    if (this.discussions.length > 0) {
                        this.currentDiscussion = this.discussions[0].id;
                        this.discussionSlug = this.discussions.find(discussion => discussion.id === this.currentDiscussion).slug;
                        this.searchDiscussions();
                        this.fetchMessages(this.currentDiscussion);
                        this.sendMessage(this.currentDiscussion);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },
        fetchMessages(currentDiscussion) {
            fetch(`/chat/messages/` + currentDiscussion)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur lors de la récupération des messages.');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                    this.messages = data;
                    console.log(this.messages);
                    console.log('End of fetch disccusions');
                })
                .catch(error => {
                    console.error(error);
                    console.log(error);
                });



        },
        selectDiscussion(discussionId) {
            this.currentDiscussion = discussionId;
            this.discussionSlug=this.discussions.find(discussion =>discussion.id ===this.currentDiscussion).slug;
            this.fetchMessages(discussionId);
        },
        searchDiscussions() {
            this.filteredDiscussions = this.discussions.filter(discussion => {
                return discussion.slug.toLowerCase().includes(this.searchQuery.toLowerCase());
            });
        },

        formatTimestamp(created_at) {
            const date = new Date(created_at);
            const options = { /*year: 'numeric', month: 'numeric', day: 'numeric', */hour: 'numeric', minute: 'numeric' /*,second: 'numeric'*/ };
            return date.toLocaleString('fr-FR', options);
        },
        sendMessage(currentDiscussion) {
            if (this.newMessage.trim() !== '') {
                const message = {
                    content: this.newMessage,
                    userId: 1,
                    discussionId: this.selectedDiscussion.id
                };


                fetch(`/chat/messages/send/` + currentDiscussion)
                    .then(response => response.json())
                    .then(data => {
                        // Réponse du backend contenant le message enregistré
                        this.messages.push(data);
                        this.newMessage = '';
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        }











    }));
});
