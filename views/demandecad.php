<div class="container py-5">
  <h2 class="text-center mb-4">Faire une demande de cours</h2>

  <div class="card shadow">
    <div class="card-body">
      <?php require_once("views/includes/getmessage.php"); ?>
      <?php if(isset($_SESSION["user"])): ?>
      <form method="post">
        <div class="row mb-3">
   

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="classe" class="form-label">Classe</label>
            <input type="text" class="form-control" id="classe" name="classe" required>
          </div>
                    <div class="col-md-6">
            <label for="email_tuteur" class="form-label">Email du tuteur</label>
            <input type="email" class="form-control" id="emailtuteur" name="emailtuteur" required>
          </div>
        
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="tuteur" class="form-label">Nom complet du tuteur</label>
            <input type="text" class="form-control" id="tuteur" name="tuteur" required>
          </div>
          <div class="col-md-6">
            <label for="tel_tuteur" class="form-label">Téléphone du tuteur</label>
            <input type="tel" class="form-control" id="teltuteur" name="teltuteur" required>
          </div>
        </div>

        <div class="row mb-3">

        </div>

        <div class="text-end">
          <button type="submit" name="envoyerlademande" class="btn btn-primary">Envoyer la demande</button>
        </div>
      </form>
      <?php endif; ?>

    </div>
  </div>
</div>