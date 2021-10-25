<?php
    trait Hello {
        public function sayhelloWorld() {
            echo "Hello".$this->getWorld();
        }
        
        abstract public function getWorld();
    }
    
    class MyHelloWorld {
        private $world;

        use Hello;

        public function getworld(){
            return $this->world;
        }

        public function setWorld($val) {
            $this->world = $val;
        }
    }
    $obj = new MyhelloWorld;
    $obj->setWorld("jiny");

    echo $obj->getWorld();
    echo "<br>";
    $obj->sayHelloWorld();

?>