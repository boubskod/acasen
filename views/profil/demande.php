<div class="card">
    <div class="card-header">
        <h3>Mes demandes</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover text-center">
    <thead class="table-primary">
      <tr>
        <th>Classe</th>
        <!-- <th>Adresse</th> -->
        <th>Nom tuteur</th>
        <th>Tel tuteur</th>
        <th>Statut</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($demandes) > 0): ?>
        <?php foreach ($demandes as $d): ?>
          <tr>
            <td><?= $d->classe ?></td>
            <!-- <td><?= $d->adresse ?></td> -->
            <td><?= $d->tuteur ?></td>
            <td><?= $d->teltuteur ?></td>
            <td>
              <?php
                if ($d->statut == 0) {
                  echo "<span class='badge bg-warning text-dark'>En attente</span>";
                } elseif ($d->statut == 1) {
                  echo "<span class='badge bg-success'>Acceptée</span>";
                } elseif ($d->statut == 2) {
                  echo "<span class='badge bg-danger'>Refusée</span>";
                }
              ?>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="5" class="text-muted">Aucune demande envoyée pour le moment.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
    </div>
</div>