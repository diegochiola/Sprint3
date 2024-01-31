<?php

class Tigger {
        private static $instance;
        private $contador;

        private function __construct() {
               echo "Building character..." . PHP_EOL;
        }
        
        public static function getInstance():self{
                if(!self::$instance){
                        self::$instance = new Tigger();
                }
                return self::$instance;
        }
        
        public function roar() {
               echo "Grrr!" . PHP_EOL;
               $this->contador++;
        }
        
        public function getContador(){
                return $this->contador;
        }
}

?>