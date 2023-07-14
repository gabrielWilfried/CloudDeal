
<script>
    // Fonction pour afficher le modal de connexion
function showLoginModal() {
    $('#loginModal').modal('show');
}

// Fonction pour cacher le modal de connexion
function hideLoginModal() {
    $('#loginModal').modal('hide');
}

// Écouteur d'événement pour le formulaire de connexion
$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();

        // Récupérer les données du formulaire
        var email = $('#email').val();
        var password = $('#password').val();

        // Faire la validation et la vérification de l'authentification
        // ...

        // Rediriger vers la page souhaitée après l'authentification
        var redirectUrl = window.location.href; // Obtenir l'URL actuelle
        window.location.href = redirectUrl; // Rediriger vers l'URL
    });
});

</script>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <input type="hidden" name="redirect_url" value="{{ Request::url() }}">
                    <!-- Ajoutez d'autres champs de formulaire ici, par exemple l'adresse e-mail et le mot de passe -->
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>


/* Style pour le formulaire de connexion */
.modal-content {
    border-radius: 0;
}

.modal-header {
    background-color: #f8f9fa;
    border-bottom: none;
}

.modal-title {
    color: #333;
    font-weight: bold;
    margin-top: 10px;
}

.modal-body {
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0069d9;
}

/* Style pour le bouton "Se connecter" */
.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0069d9;
}
</style>
