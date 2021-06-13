<?php

    class Operation
    {
        protected int $id;
        protected int $compte_id;
        protected string $libelle;
        protected string $date_operation;
        protected float $montant;
        protected int $type_operation;

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getCompte_id()
        {
            return $this->compte_id;
        }

        public function setCompte_id($compte_id)
        {
            $this->compte_id = $compte_id;
        }

        public function getDate_operation()
        {
            return $this->date_operation;
        }
        
        public function setDate_operation($date_operation)
        {
            $this->date_operation = $date_operation;
        }

        public function getMontant()
        {
            return $this->montant;
        }

        public function setMontant($montant)
        {
            $this->montant = $montant;
        }

        public function getType_operation()
        {
            return $this->type_operation;
        }

        public function setType_operation($type_operation)
        {
            $this->type_operation = $type_operation;
       }
    }
?>