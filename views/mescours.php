

  <div class="container py-5">
    
    <div class="card shadow-sm">
        <div class="card-header row">
            <h1 class="col-md-10">Mes cours</h1>
            <div class="col-md-2 text-end">
                <a href="?page=mescours&type=add" class="btn btn-success">Ajouter un cours</a>
            </div>
        </div>
      <div class="card-body">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-primary w-100">
            <tr>
              <!-- <th>Image</th> -->
              <th>Matiere</th>
              <th>Inscription</th>
              <th>Mensualite</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($cours as $c): ?>
            <tr>
              <!-- <td>
                <img src="images/<?=$c->image ?>" width="100" height="50">
              </td> -->
              <td><?= $c->nomdelamatiere ?> </td>
              <td><?= $c->inscription ?> </td>
              <td><?= $c->mensualite ?></td>
              <td>
                 <a href="" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                 <a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c->id ?>" href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                <!-- Modal -->
                  <div class="modal fade" id="exampleModal<?= $c->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Mes cours</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          vous aller supprimer ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                          <a href="?page=mescours&idcours=<?= $c->id ?>" class="btn btn-primary">Oui</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </td>
             
            </tr>
            <?php endforeach; ?>
          
          </tbody>
         
        </table>
         <!-- Bouton Demander un cours -->
           
    </div>
  </div>