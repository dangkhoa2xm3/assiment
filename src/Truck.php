<?php

namespace Admin\Op;

class Truck extends Vehicle
{
    public $payloadCapacity;
    public function __construct($make, $model, $year, $payloadCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->payloadCapacity = $payloadCapacity;
    }
    public function getDetails()
    {
        return "Truck: {$this->make} {$this->model} ({$this->year}) - {$this->payloadCapacity} doors ";
    }
    public function getpayloadCapacity()
    {
        return $this->payloadCapacity;
    }
    public function SetpayloadCapacity($payloadCapacity)
    {
        return $this->payloadCapacity;
    }
}
