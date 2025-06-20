

  <div class="container py-5">
    
    <div class="card shadow-sm">
        <div class="card-header row">
            <h1 class="col-md-10">Gestion des matières</h1>
            <div class="col-md-2 text-end">
                <a href="?page=matiere&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
      <div class="card-body">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-primary w-100">
            <tr>
              <th>image</th>
              <th>Matiere</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($matieres as $m): ?>
            <tr>
              <td>
                <img src="images/<?=$m->image ?>" width="100" height="70">
              </td>
              <td><?= $m->nomdelamatiere ?></td>
              <td>
                 <a href="?page=matiere&type=edit&id=<?= $m->id ?>" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                 <a data-bs-toggle="modal" data-bs-target="#exampleModal<?=$m->id ?>" href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                 <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?=$m->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Matières</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            etes-vous sur de vouloir supprimer ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-succes" data-bs-dismiss="modal">Non</button>
                            <a href="?page=matiere&idmatiere=<?=$m->id ?>" type="button" class="btn btn-danger">Oui</a>
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