<?php

$x = 1;
if ($x == '1') { echo 'a'; }
if ($x == true) { echo 'b'; }
if((bool)$x === true){ echo 'e'; }
if ($x === true) {  echo 'c'; }
if((int)$x === true){ echo 'd'; }