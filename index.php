<?php

include 'Entity\AbstractRobot.php';
include 'Entity\Robot1.php';
include 'Entity\Robot2.php';
include 'Entity\MergeRobot.php';
include 'Factory\IFactoryRobot.php';
include 'Factory\FactoryRobot.php';



use Factory\FactoryRobot;
use \Entity\Robot1;
use \Entity\Robot2;
use \Entity\MergeRobot;
/*
  $factory = new FactoryRobot();
  //$robot1 = $factory->CreateRobot1(5,50,10,2);
  //$robot2 = $factory->CreateRobot2(50,10,2);
  //$robot1 = $factory->addType(new Robot1(50,10,2));
  $robot1 = $factory->addType(new Robot1(80,10,2));
  $robot2 = $factory->addType(new Robot1(50,15,1));
  print_r($robot1);
  $factory->CreateRobot1(5); */

$factory = new FactoryRobot();
$factory->addType(new Robot1());
$factory->addType(new Robot2());
/*echo '<pre>';
print_r($factory->createRobot1(5));
echo '</pre>';
echo '<pre>';
print_r($factory->createRobot1(2));
echo '</pre>';*/

$mergeRobot = new MergeRobot();
$mergeRobot->addRobot(new Robot2());

$mergeRobot->addRobot($factory->createRobot2(2));
echo '<pre>';
print_r($mergeRobot);
echo '</pre>';

//$factory->addType($mergeRobot);
//$res = reset($factory->createMergeRobot(1));
//echo $res->getWeight();
