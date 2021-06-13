<?php 
session_start();
require_once "Models/compteModel.php";

$requete = "select *
  from typecompte "  ;
$typecomptes = Database::connect()->query($requete);
$typecomptes = $typecomptes->fetchall(PDO::FETCH_ASSOC);

if (!empty($_POST) && isset($_POST['add'])) {
    $compte = new Compte();
    $compte->setNumcompte($_POST['numcompte']);
    $compte->setTypecompte_id($_POST['typecompte_id']);
    $compte->setTitulaire_id($_SESSION["user"]);
    CompteModel::addAccount($compte);
    header("location : comptes.php");
}
?>
  
<?php  
    require "Views/compteForm.php";
?>