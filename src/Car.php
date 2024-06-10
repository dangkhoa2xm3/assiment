<?php

namespace Admin\Op;

class Car extends Vehicle
{
    public $numberOfDoors;
    public function __construct($make, $model, $year, $numberOfDoors)
    {
        parent::__construct($make, $model, $year);
        $this->numberOfDoors = $numberOfDoors;
    }
    public function getDetails()
    {
        return "Car: {$this->make} {$this->model} ({$this->year}) - {$this->numberOfDoors} doors";
    }
    public function numberOfDoors()
    {
        return $this->numberOfDoors;
    }
    public function SetnumberOfDoors($numberOfDoors)
    {
        return $this->numberOfDoors;
    }
}
