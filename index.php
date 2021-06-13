<?php 
  require "Models/titulaireModel.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
  $titulaire = TitulaireModel::getTitulaire();
   // if the result match then an array is returned else false (d'où la nécessité de mettre le test en premier si c'est bon)
  if($titulaire)  {
    if($_POST['email'] === $titulaire['email'] && $_POST['password'] === $titulaire['password'] ) {
        session_start();
        $_SESSION["user"] = $titulaire['id'];
        header("Location: comptes.php");  
      }
    } 
    else {
      echo "Login et mot de passe non valide" ;
    }
}
  
  require "Views/connexionView.php"; 
  
?>