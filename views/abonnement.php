

  <div class="container py-5">
    <h1 class="mb-4">Gestion des Abonnements</h1>
    <div class="text-end">
          <a href="?page=abonnement&type=add" class="btn btn-success">Ajouter</a>
    </div>
    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-primary w-100">
            <tr>
              <th>Nom</th>
              <th>Prix Mensuel</th>
              <th>Prix Annuel</th>
              <th>Nombre</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($abonnement as $a): ?>
            <tr>
              <td><?= $a["nom"] ?></td>
              <td><?= $a["prixmensuel"] ?></td>
              <td><?= $a["prixannuel"] ?></td>
              <td><?= $a["nombre"] ?></td>
              <td>
              <a href="" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
              <a  data-bs-toggle="modal" data-bs-target="#exampleModal<?= $a['id']?>" href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
              <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $a['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">abonnement</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Etes-vous sur de vouloir supprimer ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                            <a href="?page=abonnement&idabonnement=<?= $a['id']?>" class="btn btn-success">Oui</a>
                          </div>
                        </div>
                      </div>
                    </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>