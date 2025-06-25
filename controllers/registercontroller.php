<?php 

if (isset($_POST["inscrire"])){
    extract($_POST);

     if (!in_array($role, ['eleve', 'prof'])) {
        setmessage("Rôle invalide.", "danger");
        return;
    }
    
    
    if ($mdp == $mdp_confirm){
        $mdp= password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
        if (inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, $role)) {
            $user = dernier();
            $abonnementgratuit=abonnementgratuit();
            if (ajoutinscription($user->id, $abonnementgratuit->id, 1 )) {
                
                setmessage("creation de compte avec succes");
    
                 return header("location:?page=connexion");
            } 
        }
        
    }else{
        setmessage("les deux mots de passe sont differents");
    }
}

require_once("views/register.php"); 