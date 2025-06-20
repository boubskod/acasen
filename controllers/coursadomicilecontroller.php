<?php

// traitements
if (isset($_POST["envoyerlademande"])) {
    extract($_POST); 
    if (demandedecours($_SESSION["user"]->id, $_GET["id"], $classe, $tuteur, $teltuteur, $emailtuteur, 0)) {
        setmessage("Votre demande a été envoyée", "success");
        return header("Location:?page=coursadomicile"); 
    }
}

// variables 
$cours = recupererlescours();

// inclusions des pages views
if (isset($_GET["type"])) {
    if (!isset($_SESSION["user"])) {
        setmessage("Veuillez d'abord vous connecter", "danger");
    }
    require_once("views/demandecad.php");

} else {
    

    require_once("views/coursadomicile.php"); 
}
