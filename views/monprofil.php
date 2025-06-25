
<div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center ">
            <h4 class="mb-0 text-white">Mon Profil - Professeur</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Photo de profil -->
                <div class="col-md-4 text-center mb-3 ">
                    <img src="images/<?= $users->image ?>" alt="Photo de profil" class="img-fluid rounded-circle shadow" style="width: 200px; height: 200px; object-fit: cover;">
                    
                </div>

                <!-- Informations personnelles -->
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Prénom :</strong> <?= $user->prenom ?>
                        </div>
                        <div class="col-md-6">
                            <strong>Nom :</strong> <?= $user->nom ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Email :</strong> <?= $user->email ?>
                        </div>
                        <div class="col-md-6">
                            <strong>Téléphone :</strong> <?= $user->tel ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Adresse :</strong> <?= $user->adresse ?>
                        </div>
                        <div class="col-md-6">
                            <strong>Matière enseignée :</strong> <?= $user->matiere ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Diplôme :</strong> <?= $user->diplome ?>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="?page=modifierprofil" class="btn btn-warning">
                            <i class="fa fa-edit me-1"></i> Modifier mes informations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
