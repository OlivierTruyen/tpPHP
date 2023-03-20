<?php
    class Maison{
        private $nom;
        private $longueur;
        private $largeur;

        public function __construct($name , $heigth , $weight){
            $this->nom = $name;
            $this->longueur = $heigth;
            $this->largeur = $weight;
        }

        
        public function getNom(){
            return $this->nom;
        }        
        public function getLongueur(){
            return $this->longueur;
        }        
        public function getLargeur(){
            return $this->largeur;
        } 
        public function setNom($name){
            $this->nom = $name;
        }       
         public function setLongueur($taille){
            $this->nom = $taille;
        }        
        public function setLargeur($poid){
            $this->nom = $poid;
        }        

        public function surfaceMaison(){
            $resultat = $this->largeur * $this->longueur;
            echo "<p>la surface de nomMaison est égale à : x m2 $resultat</p>";

        }


    }




?>