<?php

    class Vehicule{
        private $nomVehicule;
        private $nbrRoue;

        private $vitesse;

        public function __construct($nameVehicule ,$nbrwheel , $vitesse){
            $this->nomVehicule = $nameVehicule;
            $this->nbrRoue=$nbrwheel;
            $this->vitesse=$vitesse;
        }

        public function getNom(){
            return $this->nomVehicule;
        }

        public function getNbr(){
            return $this->nbrRoue;
        }        
        
        public function getVitesse(){
            return $this->vitesse;
        }

        public function setNom($nomVehicule){
            $this->nomVehicule = $nomVehicule;
        }         
        
        public function setNbr($nbrRoue){
            $this->nbrRoue= $nbrRoue;
        }         
        public function setVitesse($vitesse){
            $this->vitesse= $vitesse;
        } 


        public function detect(){
            if($this->nbrRoue == 2){
                return "moto";
            } else if($this->nbrRoue == 4){
                return "voiture";
            }
        }

        public function boost(){
             $this->vitesse +=50;
        }
        public function plusRapide($vehicule2){
            if($this->vitesse < $vehicule2->vitesse){
                return $vehicule2->getNom() ;
            } else {
                return $this->getNom();
            }
        }


      }


    





?>