<?php


class Fan
{
   const SLOW = 1;
   const MEDIUM = 2;
   const FAST = 3;
   private $speed;
   private $on;
   private $radius;
   private $color;

   public function __construct()
   {
       $this->radius = 5;
       $this->on = false;
       $this->speed = self::SLOW;
       $this->color = "blue";

   }
   /**
    * @param string $color
    */
   public function setColor($color)
   {
      $this->color = $color;
   }

   /**
    * @param int $radius
    */
   public function setRadius($radius)
   {
      $this->radius = $radius;
   }
   /**
    * @param bool $on
    */
   public function setOn($on)
   {
      $this->on = $on;
   }
   /**
    * @param mixed $speed
    */
   public function setSpeed($speed)
   {
      $this->speed = $speed;
   }
   /**
    * @return string
    */
   protected function getColor()
   {
      return $this->color;
   }

   /**
    * @return int
    */
   protected function getRadius()
   {
      return $this->radius;
   }
   /**
    * @return int
    */
   protected function getSpeed()
   {
      return $this->speed;
   }
   /**
    * @return bool
    */
   protected function isOn()
   {
      return $this->on;
   }


   public function toString()
   {
      if ($this->isOn()){
         return $this->getColor()."<br>".$this->getRadius()."<br>"."fan is off";
      }else{
         return $this->getSpeed()."<br>".$this->getColor()."<br>".$this->getRadius()."<br>"."fan is on";
      }
   }

}


