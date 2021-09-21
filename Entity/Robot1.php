<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of Robot1
 *
 * @author user
 */
use Entity\AbstractRobot;
//конкретный тип робота Robot1
class Robot1 extends AbstractRobot{
    
    public $massa = 20;
    public $speed = 10;
    public $height = 1.3;
    public $type = "robot1";
   
   /*public function __construct() {
        echo "Creating robot1";
    }*/
  
}
