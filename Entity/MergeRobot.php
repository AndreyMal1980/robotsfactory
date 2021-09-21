<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of MergeRobot
 *
 * @author user
 */
//конкретный тип робота MergeRobot
class MergeRobot{
    
    public $robots = [];
    public function addRobot(AbstractRobot $robot) {
       
            $robot = new $robot();
            array_push($this->robots,$robot);
          
    }
    
    public function getWeight() {
        $res = 0;
        for ($i = 0; $i < count($robors); $i++) {
            $res += $robots->massa;
        }
        return $res;
    }
}
