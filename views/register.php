<div class="container col-md-6 mt-5 mb-5 pt-5 pb-4">

    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="text-center text-white">Creation de compte</h4>
        </div>
        <?php require_once("views/includes/getmessage.php"); ?>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    
                <div class="form-group col-md-6">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Adresse</label>
                    <input type="text" name="adresse" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Tel</label>
                    <input type="text" name="tel" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Confirmer votre mot de passe</label>
                    <input type="password" name="mdp_confirm" required class="form-control">
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="">Matière</label>
                    <input type="text" name="matiere" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">diplome</label>
                    <input type="text" name="diplome" required class="form-control">
                </div> -->
                <div>
                    <label for="role">Role</label>
                    <select name="role" class="form-control" required>
                        <option>...</option>
                        <option value="eleve">Élève</option>
                        <option value="prof">Professeur</option>
                    </select>

                </div>
                </div>
                <button type="submit" name="inscrire" class="btn btn-success mt-3">S'inscrire</button>
            </form>
            <p class="text-center mt-3">Vous avez déjà un compte ? <a href="?page=connexion">Connectez-vous ici</a>.</p>
        </div>
    </div>
    

</div>