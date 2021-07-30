<?php
    require "connect_db.php";
    function getAccount($id) { ;
        $db_banque = new Database();
        $requete = "select compte.id, compte.numcompte, typecompte.nom as nomcompte, compte.date_ouverture, 
        titulaire.nom, titulaire.prenom, compte.solde, compte.derniere_op 
        from compte 
        inner join titulaire on compte.titulaire_id = titulaire.id 
        inner join typecompte on compte.typecompte_id = typecompte.id 
        where titulaire.id = ?" ;
        $result = $db_banque->connection->prepare($requete);
        $result->execute(array($id));
        $comptes = $result->fetchall(PDO::FETCH_ASSOC);
        return $comptes;
    }
?>