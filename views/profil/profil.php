<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div>
                <a class="btn btn-primary" href="?page=profil&type=info">information</a>
            </div>
            <div class="mt-3">
                <a href="?page=profil&type=demande" class="btn btn-primary" >Mes demandes</a>
            </div>
            <div class="mt-3">
                <a href="?page=profil&type=motdepasse" class="btn btn-primary" >Mot de passe</a>
            </div>
        </div>
        <div class="col-md-9">
            <?php if(isset($_GET["type"]) && $_GET["type"] == "demande"): ?>
                <?php require_once("views/profil/demande.php"); ?>
            <?php elseif(isset($_GET["type"]) && $_GET["type"] == "info"): ?>
                    <?php require_once("views/profil/info.php"); ?>
            <?php else: ?>
                    <?php require_once("views/profil/motdepasse.php"); ?>
            <?php endif; ?>
        </div>
    </div>
</div>