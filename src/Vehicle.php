<?php

namespace Admin\Op;

abstract class Vehicle
{
    protected $make;
    protected $model;
    protected $year;
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function getDetails();
    public function getMake()
    {
        return $this->make;
    }
    public function setMake($make)
    {
        return $this->make;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        return $this->model;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        return $this->year;
    }
}
