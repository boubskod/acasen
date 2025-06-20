<div class="container py-5">
    <h2 class="mb-4">Ajouter une matière</h2>
    <div class="text-end mb-3">
             <a href="?page=matiere" class="btn btn-danger">← Retour</a>
     </div>
    <div class="card shadow-sm">
        <div class="card-body">
             <?php require_once("views/includes/getmessage.php"); ?>
     <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nom_matiere" class="form-label">Nom de la matière</label>
                        <input type="text" value="<?=isset($m)? $m->nomdelamatiere: '' ?>" class="form-control" id="nomdelamatiere" name="nomdelamatiere" placeholder="Ex: Mathématiques" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" <?= isset($m)? '': 'required' ?> name="image" accept="image/*">
                    </div>
                </div>     
                            <div class="mt-4 text-center">
                                <?php if ($_GET["type"]=="add") : ?>
                        <button type="submit" name="ajouter" class="btn btn-primary px-4">Ajouter</button>
                        <?php else : ?>
                        <button type="submit" name="modifier" class="btn btn-warning px-4">Modifier</button>
                        <?php endif; ?>
                        <button type="reset" class="btn btn-secondary ms-2 px-4">Annuler</button>
                        </div>
     </form>
                 </div>
    </div>
</div>
