<?php 

if (!isset($_SESSION["user"])) {
  
    return header("Location:?page=home");
}
// variables 

    


// inclusions des pages views


$ideleve = $_SESSION["user"]->id;
$demandes = recupererDemandesParEleve($ideleve);
require_once("views/profil/profil.php");