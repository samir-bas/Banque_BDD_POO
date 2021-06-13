<?php
    class Titulaire {

        private $errors = [];
        protected int $id;
        protected string $nom;
        protected string $prenom;
        protected string $email;
        protected string $password;

        const MAIL_INVALIDE = "Le mail n'est pas valide";

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNom(string $nom) {
            $this->nom = $nom;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function setEmail(string $email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
            }
            else {
                $this->errors[] = self::MAIL_INVALIDE;
            }
        }

        public function getEmail() {
            return $this->email;
        }
    }
?>