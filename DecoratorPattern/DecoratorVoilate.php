<?php

class BasicInspection
{
    public function getCost()
    {
        return 25;
    }
}


class BasicInspectionAndOilChange
{
    public function getCost()
    {
        return 25 + 17;
    }
}


class BasicInspectionAndOilChangeAndTireRotation
{
    public function getCost()
    {
        return 25 + 17 + 10;
    }
}

echo (new BasicInspectionAndOilChangeAndTireRotation())->getCost();
