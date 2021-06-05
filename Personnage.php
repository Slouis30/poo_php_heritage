<?php 
    abstract class Personnage{
        protected $pointsDeVie;
        protected $experience;
        protected $nom;
        private $alive = true;
        private $_isNew = true;
        const ZERO = 0;

        public function __construct(array $data){
            $this->hydrate($data);
            $this->isNew();
        }

        public function hydrate(array $data){
            foreach($data as $key => $value){
                $setter = "set".ucfirst($key);
                if(method_exists($this, $setter)){
                    $this->$setter($value);
                }
            }
        }

        public function gagnerExperience(){
            $this->experience += 10;
        }
        public function isNew(){
            if($this->_isNew == true){
                $this->experience = self::ZERO;
                $this->_isNew = false;
            }
            else{
                return false;
            }
        }
        
        public function recevoirDegats(int $degats){
            $this->pointsDeVie -= $degats;
            $this->isAlive();     
        }

        public function isAlive(){
            if($this->pointsDeVie <= 0){
                $this->_alive = false;
                echo $this->nom()." est mort.";
            }
        }

        abstract public function frapper(Personnage $perso);
        
        final public function setNom(string $nom){
            $this->nom = $nom;
        }

        final public function setPointsDeVie(int $vie){
            $this->pointsDeVie = $vie;
        }

        final public function nom(){
            return $this->nom;
        }
        final public function experience(){
            return $this->experience;
        }
        final public function pointsDeVie(){
            return $this->pointsDeVie;
        }

        public function infos(){
            echo "Nom : ".$this->nom()."<br>";
            echo "Experience : ".$this->experience()."<br>";
            echo "Points de vie : ".$this->pointsDeVie()."<br>";
        }
    }