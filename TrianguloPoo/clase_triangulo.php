<?php
class Triangulo
{
    private $base;
    private $altura;
    private $area;


    public function __construct(){
        $this->base = 0;
        $this->altura = 0;
        $this->area = 0;

    }

    

    /**
     * Get the value of base
     */ 
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     *
     * @return  self
     */ 
    public function setBase($base)
    {
        $this->base = $base;

    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

    }

    /**
     * Get the value of area
     */ 
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     *
     * @return  self
     */ 
    public function setArea($area)
    {
        $this->area = $area;

    }
}