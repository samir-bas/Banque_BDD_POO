<?php
    class Titulaire {
        protected int $id;
        protected string $nom;
        protected string $prenom;
        protected string $email;
        protected string $password;

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNom(string $nom) {
            $this->nom = $nom
        }

        public function getNom() {
            return $this->nom;
        }

        public function setPrenom(string $prenom) {
            $this->prenom = $prenom
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function setEmail(string $email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail(string $email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }       

    }

?>