<?php

include 'Entity\AbstractRobot.php';
include 'Entity\Robot1.php';
include 'Entity\Robot2.php';
include 'Entity\MergeRobot.php';
include 'Factory\FactoryRobot.php';



use Factory\FactoryRobot;
use \Entity\Robot1;
use \Entity\Robot2;
use \Entity\MergeRobot;


$factory = new FactoryRobot();
$factory->addType(new Robot1());
$factory->addType(new Robot2());
var_dump($factory->createRobot1(5));
var_dump($factory->createRobot1(2));


$mergeRobot = new MergeRobot();
$mergeRobot->addRobot(new Robot2());
//здесь не получается добавить
$mergeRobot->addRobot($factory->createRobot2(2));
$factory->addType($mergeRobot);
$res = reset($factory->createMergeRobot(1));
echo $res->getWeight();
