<?php 
session_start();

require_once("models/fonctions.php"); 
require_once("models/database.php"); 
require_once("views/includes/entete.php"); 

// routeur

if (isset($_GET["page"])) {
    if($_GET["page"] == "connexion") {
        require_once("controllers/logincontroller.php"); 
    }else if($_GET["page"]=="inscription"){
        require_once("controllers/registercontroller.php");
    }else if($_GET["page"]=="coursadomicile"){
        require_once("controllers/coursadomicilecontroller.php");
    }else if($_GET["page"]=="preinscription"){
        require_once("controllers/preinscriptioncontroller.php");
    }else if($_GET["page"]=="nospartenaires"){
        require_once("controllers/nospartenairescontroller.php");
    }else if($_GET["page"]=="abonnement"){
        require_once("controllers/abonnementcontroller.php");
    }else if($_GET["page"]=="demandes"){
        require_once("controllers/demandescontroller.php");
    }else if($_GET["page"]=="inscrit"){
        require_once("controllers/inscritcontroller.php");
    }else if($_GET["page"]=="ajouter"){
        require_once("controllers/ajoutercontroller.php");
    }else if($_GET["page"]=="deconnexion"){
        require_once("controllers/deconnexioncontroller.php");
    }elseif($_GET["page"]=="monprofil"){
        require_once("controllers/monprofilcontroller.php");
    }elseif($_GET["page"]=="demanderecu"){
        require_once("controllers/demanderecucontroller.php");
    }elseif($_GET["page"]=="mescours"){
        require_once("controllers/mescourscontroller.php");
    }elseif($_GET["page"]=="ajoutcours"){
        require_once("controllers/ajoutcourscontroller.php");
    }elseif($_GET["page"]=="matiere"){
        require_once("controllers/matierecontroller.php");
    }
    elseif($_GET["page"]=="profil"){
        require_once("controllers/profilcontroller.php");
    }
    else{
        require_once("controllers/homecontroller.php"); 
    }
}
  
require_once("views/includes/pied.php"); 

