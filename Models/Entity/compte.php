<?php

    class Compte {
        protected int $id;
        protected string $numcompte;
        protected int $typecompte_id;
        protected string $date_ouverture;
        protected string $derniere_op;
        protected float $solde;
        protected int $titulaire_id;

        public function setId(int $id) {
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }

        public function setNumcompte(string $numcompte) {
            $this->numcompte = $numcompte;
        }

        public function getNumCompte() {
            return $this->numcompte;
        }

        public function getTypeCompte_id() {
            return $this->typecompte_id;
        }

        public function setTypeCompte_id(int $typecompte_id) {
            $this->typecompte_id = $typecompte_id;
        }

        public function setdate_ouverture(string $date_ouverture) {
            $this->date_ouverture = $date_ouverture;
        }

        public function getDate_ouverture()
        {
            return $this->date_ouverture;
        }

        public function setTitulaire_id(int $titulaire_id) {
            $this->titulaire_id = $titulaire_id;
        }

        public function getTitulaire_id() {
            return $this->titulaire_id;
        }
  
        public function getDerniere_op()
        {
            return $this->derniere_op;
        }

        public function setDerniere_op($derniere_op)
        {
            $this->derniere_op = $derniere_op;
        }

        public function getSolde()
        {
            return $this->solde;
        }

        public function setSolde($solde)
        {
            $this->solde = $solde;
        }
    }

?>