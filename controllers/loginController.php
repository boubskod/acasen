<?php 

if (isset($_POST["connecter"])) {
    extract($_POST);
    $user = seconnecter($email);

    if ($user) {
        if (password_verify($mdp, $user->mdp)) {
        $_SESSION["user"]=$user;

        if ($user->role=="admin") {
            return header ("location:?page=dashbord");
        }else{
            return header("location:?page=home");
        }
        }else{
            setmessage("mot de passe incorrect","warning")  ;
        }
    }else{
        setmessage("email incorrect","warning")  ;
    }
}
require_once("views/login.php");