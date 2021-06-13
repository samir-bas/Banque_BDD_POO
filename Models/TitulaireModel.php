<?php
    require_once "connect_db.php";
    require "Models/Entity/titulaire.php";
    
    class TitulaireModel {
        
        public static function getTitulaire() { ;
            $requete = "select id, email, password
            from titulaire 
            where email = ? and password = ?"  ;
            $result = Database::connect()->prepare($requete);
            $result->execute([
                $_POST['email'],
                $_POST['password']
            ]);
            $titulaire = $result->fetch(PDO::FETCH_ASSOC);
            return $titulaire;
        }

    }

?>