<?php
  session_start();
  require_once "Models/comptemodel.php" ;

  if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    // Faire ceci sans création d'un objet de la classe
    // CompteModel::setDb(Database::connect());
    // $comptes = CompteModel::getAccount($_SESSION["user"]);

    // ou bien ceci avec création d'un objet avec passagae de paramètre la connexion à la BDD
    // $CompteModel = new comptemodel(Database::connect());
    // $comptes = $CompteModel->getAccount($_SESSION["user"]);
    
    // ou bien ceci sans création d'un objet et utilisation de la classe de la BDD
    $comptes = CompteModel::getAccount($_SESSION["user"]);
    // echo "<pre>";
    // echo var_dump($comptes);
    // echo "<pre>";
  }
  
  require_once "Views/comptesListView.php" ;
?>