<?php

class AreaCalculator
{
    /**
     * Calculate the total area of the shapes.
     *
     * @param  Illuminate\Support\Collection  $shapes
     * @return float
     */
    public function Area($shapes)
    {
        $area = 0;
        $shapes->each(function ($shape) use (&$area) {
            switch (gettype($shape)) {
                case "Rectangle":
                    $area += ($shape->width * $shape->height); 
                    break;
                case "Circle":
                    $area += (PI * pow($circle->radius, 2));
                    break;
            }
        });
        return $area;
    }
}