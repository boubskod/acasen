<style>
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
</style>
</head>
<body>

<div class="container py-5">
  <!-- Bloc 1 : Liste des cours disponibles -->
  <h2 class="mb-4 text-center">Cours à domicile</h2>
  <?php require_once("views/includes/getmessage.php") ?>
  
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php foreach($cours as $c): ?>
      <div class="col">
        <div class="card shadow h-100">
          <img src="images/<?= $c->image ?>" width="100%" height="300">
          <div class="card-body text-start">
            <h5 class="card-title">Cours : <?= $c->nomdelamatiere ?></h5>
            <p class="card-text"><strong>Nom :</strong> <?= $c->nom ?></p>
            <p class="card-text"><strong>Prénom :</strong> <?= $c->prenom ?></p>
            <p class="card-text"><strong>Tél :</strong> <?= $c->tel ?></p>
            <p class="card-text"><strong>Email :</strong> <?= $c->email ?></p>
            <p class="card-text"><strong>Inscription :</strong> <?= $c->inscription ?> FCFA</p>
            <p class="card-text"><strong>Mensualité :</strong> <?= $c->mensualite ?> FCFA</p>
            <a href="?page=coursadomicile&type=add&id=<?= $c->id ?>" class="btn btn-primary mt-2">Envoyer une Demande</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>



</body>
</html>
