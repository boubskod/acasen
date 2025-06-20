<?php


// traitements
if (isset($_POST["ajouter"])) {
    extract($_POST); 

     $img_name = uniqid(). ".jpg";
        $img = $_FILES["image"]["tmp_name"];

    
    if (ajouterunematiere( $nomdelamatiere, $img_name)) {

        if($_FILES["image"]["size"]>0){
        move_uploaded_file($img, "images/" .$img_name); 
        } 
        return header ("Location:?page=matiere"); 

       

    }else{
        die("erreur");
    }
    
}

if (isset($_GET ["idmatiere"])){
    if (supprimerunematiere($_GET["idmatiere"])) {
        return header ("Location:?page=matiere");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    $m = recupererunematire($_GET["id"]);

    if ($_FILES["image"]["size"] > 0) {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";

        move_uploaded_file($img, "images/".$img_name);
    }else{
        $img_name = $m->image;
    }
    
    if (modifierunematiere($_GET["id"], $nomdelamatiere, $img_name)) {
        return header("Location:?page=matiere");
    }
}

// variable 

$matieres=recupererlesmatiere();


// inclusions des pages views
if (isset($_GET["type"])) {
    if (isset ($_GET["id"])) {
        $m=recupererunematire($_GET["id"]);
    }
    require_once ("views/ajoutmatiere.php");
}else{
    require_once("views/matiere.php");
}