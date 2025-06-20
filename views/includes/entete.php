<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ACASEN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
 <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="?page=home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>ACASEN</h2>
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <?php if (isset($_SESSION["user"])): ?>
                <?php if ($_SESSION["user"]->role == "eleve"): ?>
                    <a href="?page=home" class="nav-item nav-link">Accueil</a>
                    <a href="?page=coursadomicile" class="nav-item nav-link">Cours à domicile</a>
                    <a href="?page=preinscription" class="nav-item nav-link">Préinscriptions</a>
                    <a href="?page=nospartenaires" class="nav-item nav-link">Nos partenaires</a>

                <?php elseif ($_SESSION["user"]->role == "professeur"): ?>
                    <a href="?page=home" class="nav-item nav-link">Accueil</a>
                    <a href="?page=mescours" class="nav-item nav-link">Mes cours</a>
                    <a href="?page=demanderecu" class="nav-item nav-link">Demandes reçues</a>
                    <a href="?page=monprofil" class="nav-item nav-link">Mon profil</a>

                <?php elseif ($_SESSION["user"]->role == "admin"): ?>
                    <a href="?page=abonnement" class="nav-item nav-link">Abonnements</a>
                    <a href="?page=demandes" class="nav-item nav-link">Demandes</a>
                    <a href="?page=inscrit" class="nav-item nav-link">Utilisateurs</a>
                    <a href="?page=matiere" class="nav-item nav-link">Matières</a>
                <?php endif; ?>

            <?php else: ?>
                <!-- Utilisateur non connecté -->
                <a href="?page=home" class="nav-item nav-link">Accueil</a>
                <a href="?page=inscription" class="nav-item nav-link">Inscription</a>
                <a href="?page=coursadomicile" class="nav-item nav-link">Cours à domicile</a>

              
            <?php endif; ?>
 <?php if (isset($_SESSION["user"])): ?>
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION["user"]->prenom ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=profil">Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page=deconnexion">Déconnexion</a></li>
          </ul>
        </li>
         <?php else: ?>
                <a href="?page=connexion" class="nav-item nav-link">Connexion</a>
            <?php endif; ?>

        </div>

        <!-- Bouton Connexion / Déconnexion -->
        <div class="d-none d-lg-block">
            
                   
                <a href="#" class="btn btn-danger py-4 px-lg-5">
                    Education <i class="fa fa-user-graduate ms-3"></i>
                </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
