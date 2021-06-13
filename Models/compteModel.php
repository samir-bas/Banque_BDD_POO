<?php
    require_once "connect_db.php";
    require "Models/Entity/compte.php";

    // Pas d'instanciation de cette classe avec comme paramètre une connexion d'une BDD
    // faire appel d'abord à la fonction statique setDb 
    // class CompteModel {

    //     private static PDO $db;

    //     public static function SetDb($db) {
    //         self::$db = $db;
    //     }

    //     public static function getAccount($id) { ;
    //         $requete = "select compte.id, compte.numcompte, typecompte.nom as nomcompte, compte.date_ouverture, 
    //                 titulaire.nom, titulaire.prenom, compte.solde, compte.derniere_op 
    //             from compte 
    //                 inner join titulaire on compte.titulaire_id = titulaire.id 
    //                 inner join typecompte on compte.typecompte_id = typecompte.id 
    //             where titulaire.id = ?" ;
    //         $result = self::$db->prepare($requete);
    //         $result->execute([$id]);
    //         $comptes = $result->fetchall(PDO::FETCH_ASSOC);
    //         return $comptes;
    //     }
  
    // }

    // instanciation de cette classe avec comme paramètre une connexion d'une BDD
    // class CompteModel {

    //     private PDO $db; 

    //     public function getAccount($id) { ;
    //         $requete = "select compte.id, compte.numcompte, typecompte.nom as nomcompte, compte.date_ouverture, 
    //                 titulaire.nom, titulaire.prenom, compte.solde, compte.derniere_op 
    //             from compte 
    //                 inner join titulaire on compte.titulaire_id = titulaire.id 
    //                 inner join typecompte on compte.typecompte_id = typecompte.id 
    //             where titulaire.id = ?" ;
    //         $result = $this->db->prepare($requete);
    //         $result->execute([$id]);
    //         $comptes = $result->fetchall(PDO::FETCH_ASSOC);
    //         return $comptes;
    //     }
    //     public function __construct ($db) {
    //         $this->db = $db;
    //     }
   
    // }
    
    // Utilisation direct de cette classe ainsi que la classe Database (Connexion BDD) sans instantiation
    class CompteModel {

        public static function getAccount($id) { ;
            $requete = "select compte.id, compte.numcompte, typecompte.nom as nomcompte, compte.date_ouverture, 
                    titulaire.nom, titulaire.prenom, compte.solde, compte.derniere_op 
                from compte 
                    inner join titulaire on compte.titulaire_id = titulaire.id 
                    inner join typecompte on compte.typecompte_id = typecompte.id 
                where titulaire.id = ?" ;
            //appeler directement la fonction statique de connexion dans la classe 
            // si une seule et unique connexion à la BDD 
            $result = Database::connect()->prepare($requete);
            $result->execute([$id]);
            $comptes = $result->fetchall(PDO::FETCH_CLASS, 'compte');
            return $comptes;
        }

        public static function addAccount(Compte $compte) {
            $requete = "insert into compte (numcompte, typecompte_id, titulaire_id) 
                values (?, ?, ?) " ;
            $result = Database::connect()->prepare($requete);
            $result->execute([
                $compte->getNumcompte(),
                $compte->getTypecompte_id(),
                $compte->getTitulaire_id()
            ]);    
        }
  
    }

?>