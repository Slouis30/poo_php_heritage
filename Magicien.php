<?php 
    final class Magicien extends Personnage{
        private $_magie;
        private static $classe = "Magicien";

        public function isNew(){
            parent::isNew();
            $this->setPointsDeVie(100);
            $this->_magie = 100;
        }

        public final function magie(){
            return $this->_magie;
        }
        public final function classe(){
            return self::$classe;
        }

        public function frapper(Personnage $perso){
            echo $this->nom()." frappe ".$perso->nom().".";
            $degats = 10;
            $perso->recevoirDegats($degats);
            echo "<br>";
            echo $perso->nom()." perd ". $degats." points de vie.";
        }

        public function infos(){
            parent::infos();
            echo "Magie : ".$this->magie()."<br>";
            echo "Classe : ".$this->classe()."<br>";
        }
    }