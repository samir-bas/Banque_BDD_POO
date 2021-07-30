<?php

    class Compte {
        protected int $id;
        protected string $numcompte;
        protected int $typecompte_id;
        protected string $date_ouverture;
        protected string $derniere_operation;
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

        public function getNumcompte() {
            return $this->numcompte;
        }

        public function getTypecompte_id() {
            return $this->typecompte_id;
        }

        public function setTypecompte_id(int $typecompte_id) {
            $this->typecompte_id = $typecompte_id;
        }

        public function setdate_ouverture(string $date_ouverture) {

        }
        

      
    }

?>