<?php


// traitements
if (isset($_POST["ajouter"])) {
    extract($_POST); 

    if (ajouteruncours($_SESSION["user"]->id, $idmatiere, $mensualite, $inscription)) {

        if($_FILES["image"]["size"]>0){
        move_uploaded_file($img, "images/".$img_name); 
        } 
        return header ("Location:?page=mescours"); 

       

    }
    
} 
if (isset($_GET["idcours"])) {
    if (supprimeruncours($_GET["idcours"])) {
        return header ("Location:?page=mescours");
    }
}

// variable 

$cours=recupererlescours();
$matieres=recupererlesmatiere();



// inclusions des pages views
if (isset($_GET["type"])) {
    require_once ("views/ajoutcours.php");
}else{
    require_once("views/mescours.php");
}

