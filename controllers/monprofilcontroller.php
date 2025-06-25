<?php

$id = $_SESSION["user"]->id;
$user = AvoirInfoUtilisateur($id);  
require_once("views/monprofil.php");
