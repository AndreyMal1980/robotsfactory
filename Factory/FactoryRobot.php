<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Factory;

/**
 * Description of Robot
 *
 * @author user
 */
use \Entity\Robot1;
use \Entity\Robot2;
use \Entity\AbstractRobot;

//use \Factory\IFactoryRobot;

class FactoryRobot {

    public $robots = [];
    public function addType(AbstractRobot $robot) {
        return new $robot();
    }

    public function createRobot1($count) {
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
            $robot = new Robot1();
            $robots[$i] = $robot;
        }
        return $robots;
    }

    public function createRobot2($count) {
        $robots = [];
        for ($i = 0; $i < $count; $i++) {
            $robot = new Robot2();
            $robots[$i] = $robot;
        }
        return $robots;
    }

}
