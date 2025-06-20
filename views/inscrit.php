

  <div class="container py-5">
    <h1 class="mb-4">Gestion des Inscriptions</h1>

    <div class="card shadow-sm ">
      <div class="card-body ">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-primary w-100">
            <tr>
              <th>Utilisateurs</th>  
              <th>Abonnements</th>
              <th>Date</th>
              <th>Statut</th>
              <th>role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($inscrits as $i): ?>
            <tr>
              <td><?= $i->prenom ?> <?= $i->nom ?></td>
              <td><?= $i->nomabonnement ?></td>
              <td><?= date("d/m/Y", strtotime($i->date)) ?></td>
              <td><span class="badge bg-primary"><?= $i->statut ?></span></td>
              <td><?= $i->role ?></td>
              <td>
              <a href="" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
              <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
