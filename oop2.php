<?php

class Car {
    public $model;
    public $wheels;
    private $engine;
    public static $speed;

    public function __construct(Engine $engine){
        $this->engine = $engine;
    }

    public function move(){
        $this->engine->start();
        echo "moving\n";
    }
}

class Engine {
    public function start(){
        echo "started\n";
    }
}

class NewEngine extends Engine {
    public function start(){
        echo "new engine started\n";
    }
}

$car = new Car(new NewEngine());
$car->move();
