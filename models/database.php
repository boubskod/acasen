<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=acasen","root","");
} catch(PDOException $e){
    echo"erreur:".$e->getmessage()."a la ligne".__LINE__;
}

function ajouterunematiere($nomdelamatiere, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO matieres VALUES (null, :nomdelamatiere, :image)");
        return $q->execute([
            "nomdelamatiere"=>$nomdelamatiere,
            "image"=>$image,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    } 
}

function recupererlesmatiere(){
    global $db;
    try {
        $q= $db->prepare("SELECT * FROM matieres ");
        $q -> execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    }  catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }   
}

function recupererunematire($id){
    global $db;
    try {
        $q = $db-> prepare("SELECT * FROM matieres WHERE id=:id");
        $q->execute(["id"=>$id]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function modifierunematiere($id, $nomdelamatiere, $image) {
    global $db;
    try {
        $q = $db-> prepare("UPDATE matieres SET nomdelamatiere=:nomdelamatiere, image =:image WHERE id=:id");
        return $q-> execute(["nomdelamatiere"=>$nomdelamatiere, "image"=>$image, "id"=>$id ]);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function supprimerunematiere($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM matieres WHERE id=:id");
       return $q-> execute(["id"=>$id]);
    }  catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    } 
}

function recupererlescours(){
    global $db;
    try {
        $q= $db->prepare("SELECT c.id as id, mensualite, inscription, nomdelamatiere, image, nom, prenom, tel, email 
                            FROM cours c , matieres m, users u
                            WHERE c.idmatiere = m.id AND u.id = c.idprof");
        $q -> execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
        
    }  catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}



function ajouteruncours($idprof, $matiere, $inscription, $mensualite){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO cours VALUES(null, :idprof, :idmatiere, :mensualite, :inscription)");
        return $q->execute([
            "idprof"=>$idprof,
            "idmatiere"=> $matiere,
            "mensualite"=> $mensualite,
            "inscription"=>$inscription,
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function ajouterunabonnement($nom, $prixmensuel, $prixannuel, $nombre,) {
    global $db;
    try {
        $q = $db->prepare("INSERT INTO abonnement VALUES(null, :nom, :prixmensuel, :prixannuel, :nombre)");
        return $q-> execute([
            "nom" => $nom,
            "prixmensuel" => $prixmensuel,
            "prixannuel" => $prixannuel,
            "nombre" => $nombre,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}
function recupererlesabonnements() {
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM abonnement");
        $q -> execute();

        return $q->fetchAll();
    }catch(PDOException $e){
        echo "Erreur: ".$e->getmessage(). "a la ligne ".__LINE__;
    }
}
function abonnement($nom, $prixmensuel, $prixannuel, $nombre){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO abonnement VALUES (null, :nom, :prixmensuel, :prixannuel, :nombre");
        return $q->execute([
            "nom" => $nom,
            "prixmensuel" => $prixmensuel,
            "prixannuel" => $prixannuel,
            "nombre" => $nombre,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function supprimerunabonnement($id) {
    global $db;
    try {
        $q = $db->prepare("DELETE FROM abonnement WHERE id=:id");
       return $q->execute(["id"=>$id]);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function supprimeruncours($id) {
    global $db;
    try {
        $q = $db->prepare("DELETE FROM cours WHERE id=:id");
       return $q->execute(["id"=>$id]);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function abonnementgratuit() {
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM abonnement ORDER BY prixmensuel asc");
        $q -> execute();
        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function dernier(){
    global $db;
    try{
        $q = $db->prepare ("SELECT * FROM users ORDER BY id desc");
        $q ->execute();
        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function user($id){
    global $db;
    try {
        $q = $db->prepare ("SELECT * FROM users WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }   
}

function seconnecter($email){
    global $db;
    try {
        $q = $db->prepare ("SELECT * FROM users WHERE email=:email");
        $q->execute(["email" => $email]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }   
}
function inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, $matiere, $diplome, $role){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES(null, :prenom, :nom, :adresse, :tel, :email, :mdp, :matiere, :diplome, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "tel" => $tel,
            "nom" => $nom,
            "adresse" => $adresse,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role,
            "matiere" => $matiere,
            "diplome" => $diplome,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function AvoirInfoUtilisateur($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE id = :id");
        $q->execute(["id" => $id]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}

function ajoutinscription($iduser, $idabonnement, $statut) {
    global $db;
    try {
        $q = $db->prepare("INSERT INTO inscription VALUES(null, :iduser, :idabonnement, NOW(), :statut)");
        return $q->execute([
            "iduser" => $iduser,
            "idabonnement" => $idabonnement,
            "statut" => $statut,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function inscrits() {
    global $db;
    try {
        $q = $db->prepare ("SELECT i.id as id, u.nom as nom, prenom, a.nom as nomabonnement, date, statut, role
        FROM inscription i, users u, abonnement a
        WHERE i.iduser = u.id AND i.idabonnement = a.id");
        $q-> execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getmessage(). "a la ligne ".__LINE__;
    }
}

function demandedecours($ideleve, $idcours, $classe,$tuteur,  $teltuteur, $emailtuteur, $statut){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO demande VALUES(null, :ideleve, :idcours, :classe, :tuteur, :teltuteur, :emailtuteur, :statut, NOW())");
        return $q->execute([
            "ideleve" => $ideleve,
            "idcours" => $idcours,
            "tuteur" => $tuteur,
            "classe" => $classe,
            "teltuteur" => $teltuteur,
            "emailtuteur" => $emailtuteur,
            "statut" => $statut,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__. "danger");
    }
}

function recupererlesdemandedecours() {
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM demande");
        $q -> execute();

        return $q->fetchAll();
    }catch(PDOException $e){
        echo "Erreur: ".$e->getmessage(). "a la ligne ".__LINE__;
    }
}

function recupererDemandesPourProf($idprof) {
    global $db;
    try {
        $q = $db->prepare("SELECT d.id as id, tuteur, classe, teltuteur, emailtuteur, d.statut as statut, ideleve, idprof, idmatiere, inscription, mensualite
        FROM demande d, cours c
        WHERE d.idcours = c.id AND c.idprof = :idprof");
        $q -> execute(["idprof" => $idprof]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getmessage(). "a la ligne ".__LINE__;
    }
}

function updateStatutDemande($id, $statut) {
    global $db;
    try {
        $q = $db->prepare("UPDATE demande SET statut = :statut WHERE id = :id");
        return $q->execute([
            "id" => $id,
            "statut" => $statut
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__ . " danger");
    }
}

function recupererDemandesParEleve($ideleve) {
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM demande WHERE ideleve = :id");
        $q->execute(["id" => $ideleve]);
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
        return [];
    }
}

