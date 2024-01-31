<?php

class Tigger {
        private static $instance;
        private $contador;

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }
       public static getInstance(): Self{
        if(!Self ::instance){
                Self::instance = new Tigger();
        }
        return Self::instance;
       }
       public function roar() {
               echo "Grrr!" . PHP_EOL;
               $this->$contador++;
       }
        public function getContador(){
        $this->contador = $contador;
        }
}

?>