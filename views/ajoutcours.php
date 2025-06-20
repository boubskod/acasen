<div class="container py-5">
  <h1 class="mb-4 text-center">Ajouter un Cours</h1>

  <div class="text-end mb-3">
    <a href="?page=mescours" class="btn btn-danger">← Retour</a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body">
             <?php require_once("views/includes/getmessage.php"); ?>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          
          <div class="col-md-6">
            <label for="matiere" class="form-label">Matière</label>
            <select class="form-control" name="idmatiere" required>
              <option>Veuillez selectionner une matière</option>
              <?php foreach($matieres as $m): ?>
                <option value="<?= $m->id ?>"><?= $m->nomdelamatiere ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6">
            <label for="prixmensuel" class="form-label">Frais d'inscription</label>
            <input type="number" class="form-control" id="inscription" name="inscription" required>
          </div>

          <div class="col-md-6">
            <label for="prixannuel" class="form-label">Mensualité</label>
            <input type="number" class="form-control" id="mensualite" name="mensualite" required>
          </div>

         

        </div>

        <div class="mt-4 text-center">
          <button type="submit" name="ajouter" class="btn btn-primary px-4">Ajouter</button>
          <button type="reset" class="btn btn-secondary ms-2 px-4">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

