

  <div class="container py-5">
    <h1 class="mb-4">Demandes reçues</h1>

    <div class="card shadow-sm ">
      <div class="card-body ">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-primary w-100">
            <tr>
              <th>Prénom</th>  
              <th>Nom </th>
              <th>Classe</th>
              <th>Adresse </th>
              <th>tuteur</th>
              <th>tel tuteur</th>
              <th>email tuteur</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($demandes as $d): ?>
            <tr>
              <td><?= user($d->ideleve)->prenom  ?></td>
              <td><?= user($d->ideleve)->nom  ?></td>
              <td><?= $d->classe ?>ième</td>
              <td><?= user($d->ideleve)->adresse  ?></td>
              <td><?= $d->tuteur ?></td>
              <td><?= $d->teltuteur ?></td>
              <td><?=$d->emailtuteur ?></td>
              <td>
<?php
          if ($d->statut==0){
                echo"<span class='badge bg-warning text-dark'>En attente</span>";
            }elseif ($d->statut == 1) {
                echo "<span class='badge bg-success'>Acceptée</span>";
            }elseif ($d->statut == 2) {
                echo "<span class='badge bg-danger'>Refusée</span>";
          }
    ?>
              </td>
         <td>
  <a href="?page=demanderecu&type=accepter&id=<?= $d->id ?>" class="btn btn-outline-success">
    <i class="fa fa-check"></i>
  </a>
  <a href="?page=demanderecu&type=refuser&id=<?= $d->id ?>" class="btn btn-outline-danger">
    <i class="fa fa-times"></i>
  </a>
</td>

            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
