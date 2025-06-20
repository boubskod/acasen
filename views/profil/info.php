<div class="card">
  <div class="card-header">
      <h3>Mes informations</h3>
  </div>
        <?php require_once("views/includes/getmessage.php"); ?>

  <div class="card-body">
      <form action="" method="post">
          <div class="row">
              <div class="form-group col-md-6">
                  <label for="">Prénom</label>
                  <input type="text" name="prenom" value="<?= $user->prenom ?>" required class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Nom</label>
                  <input type="text" name="nom" value="<?= $user->nom ?>" required class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Adresse</label>
                  <input type="text" name="adresse" value="<?= $user->adresse ?>" required class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Téléphone</label>
                  <input type="text" name="tel" value="<?= $user->tel ?>" required class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Email</label>
                  <input type="email" name="email" value="<?= $user->email ?>" required class="form-control">
              </div>
          </div>
          <button type="submit" name="modifier" class="btn btn-warning mt-3">Modifier</button>
      </form>
  </div>
</div>
