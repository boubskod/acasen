<?php


if (!isset($_SESSION["user"])) {
    return header("Location:?page=home");
}


if (isset($_POST["modifier"])) {
    extract($_POST);
    $id = $_SESSION["user"]->id;

    
    $q = $db->prepare("UPDATE users SET prenom = :prenom, nom = :nom, adresse = :adresse, tel = :tel, email = :email WHERE id = :id");
    $q->execute([
        "prenom" => $prenom,
        "nom" => $nom,
        "adresse" => $adresse,
        "tel" => $tel,
        "email" => $email,
        "id" => $id
    ]);

    setmessage("Informations mises à jour avec succès", "success");
    $_SESSION["user"] = AvoirInfoUtilisateur($id); 
    return header("Location:?page=profil");
}

// Traitement du changement de mot de passe
if (isset($_POST["changermdp"])) {
    extract($_POST);

    $id = $_SESSION["user"]->id;
    $user = AvoirInfoUtilisateur($id);

    if (!password_verify($ancienmdp, $user->mdp)) {
        setmessage("Ancien mot de passe incorrect", "danger");
    } elseif ($nouveaumdp != $confirmermdp) {
        setmessage("Les mots de passe ne correspondent pas", "danger");
    } else {
        $hash = password_hash($nouveaumdp, PASSWORD_DEFAULT);
        try {
            global $db;
            $q = $db->prepare("UPDATE users SET mdp = :mdp WHERE id = :id");
            $q->execute(["mdp" => $hash, "id" => $id]);
            setmessage("Mot de passe mis à jour avec succès", "success");
        } catch (PDOException $e) {
            setmessage("Erreur: " . $e->getMessage(), "danger");
        }
    }
}


// Variables
$ideleve = $_SESSION["user"]->id;
$user = AvoirInfoUtilisateur($ideleve);
$demandes = recupererDemandesParEleve($ideleve);

// Vue
require_once("views/profil/profil.php");
