<?php
if (!isset($_SESSION["user"])) {
    setmessage("Veuillez vous connecter pour accéder à vos demandes.", "danger");
    return header("Location:?page=profil");
}
// variables 

    


// inclusions des pages views


$ideleve = $_SESSION["user"]->id;
$demandes = recupererDemandesParEleve($ideleve);

require_once("views/profil/demande.php");