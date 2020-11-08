<?php
Require_once('GetRandStr.php');
$genRandomStr = new n138\genRandomStr();
$genRandomStr->setLength(24);
$genRandomStr->setCharType(11);
echo $genRandomStr->getResult();
