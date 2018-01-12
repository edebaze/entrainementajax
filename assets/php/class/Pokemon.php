<?php

    class Pokemon {
        public $lvl = 1;
        public $nom;
        public $url;
        public $att;
        public $vie;

        public function __construct($nom, $lvl) {
            $this->lvl = $lvl;
            $this->nom = $nom;
            $this->att = 20*$lvl;
            $this->vie = 50*$lvl;
            
        }

        public function attaque($cible) {
            $cible->vie -= $this->att;
        }

        public function mort() {
            if($this->vie <= 0) {
                echo ($this->nom . ' est mort');
            }
        }

    }

?>