<?php 
require "FIFO.php";
require "LIFO.php";

$L = (new Lifo)->push(6)->pop();
$F = (new Fifo)->push(4)->pop();

var_dump($L);
var_dump($F);