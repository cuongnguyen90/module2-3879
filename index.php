<?php
require ('Fan.php');

$fan = new Fan();
$fan->setColor("yellow");
$fan->setOn(true);
$fan->setSpeed($fan::FAST);
$fan->setRadius(10);
echo $fan->toString();
echo ("<br>");
$fan2 = new Fan();
$fan->setColor("blue");
$fan->setOn(false);
$fan->setSpeed($fan2::MEDIUM);
$fan->setRadius(5);
echo $fan->toString();