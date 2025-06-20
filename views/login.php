
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-center mb-4">Connexion</h3>
        <?php require_once("views/includes/getmessage.php"); ?>
        <form action="" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" id="password" required>
          </div>
          <button type="submit" name="connecter" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <p class="text-center mt-3">Pas encore de compte ? <a href="?page=inscription">Inscrivez-vous ici</a>.</p>
      </div>
    </div>
  </div>