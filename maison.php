<?php
    class Maison{
        private $nom;
        private $longueur;
        private $largeur;

        private $etage;

        public function __construct($name , $heigth , $weight, $floor){
            $this->nom = $name;
            $this->longueur = $heigth;
            $this->largeur = $weight;
            $this->etage = $floor;
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
        public function getNbrEtage(){
            return $this->etage;
        }  
        public function setNom($name){
            $this->nom = $name;
        }       
         public function setLongueur($longueur){
            $this->longueur = $longueur;
        }        
        public function setLargeur($largeur){
            $this->largeur = $largeur;
        }     
        public function setNbrEtage($etage){
            $this->etage = $etage;
        }    

        public function surfaceMaison(){
            $resultat = ($this->largeur * $this->longueur)*$this->etage;
            echo "<p>la surface de " . $this->nom . " est égale à : x m2 $resultat</p>";

        }


    }




?>