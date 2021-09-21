<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of Robot2
 *
 * @author user
 */
use Entity\AbstractRobot;
//конкретный тип робота Robot2
class Robot2 extends AbstractRobot {
    
    public $massa = 40;
    public $speed = 15;
    public $height = 2;
    public $type = "robot2";
     
    /* public function __construct() {
        echo "Creating robot2";
    }*/
}
