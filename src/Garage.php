<?php
namespace Admin\Op;
class Garage {
    public $vehicles = [];
    public function __construct(){
        $this->vehicles = [];
    }
    public function addVehicle($Vehicle){
        $this->vehicles[] = $Vehicle;
    }
    public function listVehicle($Vehicle){
        foreach($this->vehicles as $Vehicle){
            echo $Vehicle->getDetails().PHP_EOL;
        }
    }
}