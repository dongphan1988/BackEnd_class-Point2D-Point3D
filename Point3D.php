<?php

class Point3D
{
    public $x;
    public $y;
    public $z;

    public function __construct($_x, $_y, $_z)
    {
        $this->x = $_x;
        $this->y = $_y;
        $this->y = $_z;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($newX)
    {
        $this->x = $newX;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($newY)
    {
        $this->y = $newY;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($newZ)
    {
        $this->z = $newZ;
    }


    public function getXYZ()
    {
        $array = array($this->x, $this->y, $this->z);
        return $array;
    }

    public function setXY($newx, $newy, $newz)
    {
        $this->x = $newx;
        $this->y = $newy;
        $this->z = $newz;
    }

    public function toString()
    {
        $array = $this->getXYZ();
        print_r($array);
    }
}

?>