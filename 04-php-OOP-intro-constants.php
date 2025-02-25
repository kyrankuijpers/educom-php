<?php

    class Fruit {
        
        function __construct($name){
            $this->name = $name;
        }

        function __destruct(){
            echo "The fruit is {$this->name}.";
        }
        
        // properties
        public $name;
        public $color;
        const COLOR = 'red';

        // methods
        function get_name(){
            return $this->name;
        }

        protected function intro(){
            echo "he PROTECC";
        }
    }    

    class Strawberry extends Fruit{
        public function message(){
            echo "What is the meaning of life?";
        }
    }

    $apple = new Fruit("Monsieur Apple");
    //$apple->set_name("Monsieur Apple");
    echo $apple->get_name();
    echo $apple::COLOR;
    var_dump($apple instanceof Fruit);

    $strawberry = new Strawberry('Madame Strawberry');
    $strawberry->message();
    $strawberry->intro();



?>