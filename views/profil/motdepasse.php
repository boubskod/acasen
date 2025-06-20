<div class="card">
    <div class="card-header">
        <h3>Changer le mot de passe</h3>
        <?php require_once("views/includes/getmessage.php"); ?>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="">Ancien mot de passe</label>
                <input type="password" name="ancienmdp" required class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Nouveau mot de passe</label>
                <input type="password" name="nouveaumdp" required class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Confirmer le nouveau mot de passe</label>
                <input type="password" name="confirmermdp" required class="form-control">
            </div>
            <button type="submit" name="changermdp" class="btn btn-warning">Changer le mot de passe</button>
        </form>
    </div>
</div>
