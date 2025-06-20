
  <div class="container py-5">
    <h1 class="mb-4">Ajouter un Utilisateur</h1>
      <div class="text-end">
        <a href="?page=abonnement" class="btn btn-danger">Retour</a>
      </div>
    <div class="card shadow-sm">
      <div class="card-body">
      <?php require_once("views/includes/getmessage.php"); ?>
        <form action="" method="post">
          <div class="mb-3 form-group">
            <label for="nom" class="form-label">Nom de l'abonnement</label>
            <input type="text" class="form-control" id="nom" placeholder="" name="nom">
          </div>

          <div class="mb-3 form-group">
            <label for="prix mensuel" class="form-label">prix mensuel</label>
            <input type="number" class="form-control" placeholder="Entrer le prix" name="prixmensuel">
          </div>

          <div class="mb-3 form-group">
            <label for="prix annuel" class="form-label">prix annuel</label>
            <input type="number" class="form-control" placeholder="Entrer le prix" name="prixannuel">
          </div>

          <div class="mb-3 form-group">
            <label for="nombre" class="form-label">Nombre d'élève</label>
            <input type="number" class="form-control" id="" placeholder="" name="nombre">
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
          </div>
        </form>
      </div>
    </div>
  </div>
