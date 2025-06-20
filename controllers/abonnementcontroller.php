<?php
// traitements
if (isset($_POST["ajouter"])) {
    extract($_POST); 
    if (ajouterunabonnement($nom, $prixmensuel, $prixannuel, $nombre)) {
        return header ("Location:?page=abonnement"); 
    }
} 

if (isset($_GET["idabonnement"])) {
    if (supprimerunabonnement($_GET["idabonnement"])) {
        return header ("Location:?page=abonnement");
    }
}

// variables
$abonnement= recupererlesabonnements();

// inclusions des pages views
if (isset($_GET["type"])) {
    require_once ("views/ajouter.php");
}else{
    require_once("views/abonnement.php");
}