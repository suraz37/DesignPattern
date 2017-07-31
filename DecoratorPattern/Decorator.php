<?php

interface CarService
{
    public function getCost();

    public function getDesc();
}

class BasicInspection implements CarService
{

    public function getCost()
    {
        return 25;
    }

    public function getDesc()
    {
        return "Description: BasicInspection => ";
    }
}

class BasicInspectionAndOilChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 17;
    }

    public function getDesc()
    {
        return $this->carService->getDesc() . " with oil => ";
    }
}

class BasicInspectionAndOilChangeAndTireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 10;
    }

    public function getDesc()
    {
        return $this->carService->getDesc() . " with Tire => ";
    }
}

$inspection = new BasicInspectionAndOilChangeAndTireRotation(new BasicInspectionAndOilChange(new BasicInspection()));
echo $inspection->getDesc();
echo $inspection->getCost();
