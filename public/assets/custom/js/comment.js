    window.addEventListener('alpine:init', () => {
        Alpine.data('commentView', () => ({
            comments: [],
            commentInput: null,
            fetchComment() {
                fetch(`/comments/${5}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        this.comments = data;
                        console.log(this.comments)
                    })
                    .catch(error => {
                        console.error(error);
                    });
            },
         
            submitComment() {
                var formData = new FormData(document.getElementById('comment-form'))
                
    
                fetch(`/comments/comment/${1}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    body: formData,
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.status === 'success') {
    
                            // Ajouter le nouveau commentaire à la liste
                            this.comments.push(data.comment);
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            },
        }));
    });
