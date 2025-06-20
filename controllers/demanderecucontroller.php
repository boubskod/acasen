<?php





if (isset($_GET["type"]) && isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    if ($_GET["type"] == "accepter") {
        updateStatutDemande($id, 1); // Acceptée
    } elseif ($_GET["type"] == "refuser") {
        updateStatutDemande($id, 2); // Refusée
    }
    
    header("Location:?page=demanderecu");
    exit;
}

$demandes = recupererDemandesPourProf($_SESSION["user"]->id);

require_once ("views/demanderecu.php");