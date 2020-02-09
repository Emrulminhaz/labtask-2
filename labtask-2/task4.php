<?php
 $a = $_POST["1Number"];
  $b = $_POST["2Number"];
   $c = $_POST["3Number"];

if ($a >= $b && $a >= $c) {
    echo " $a is a largest Number";}
if ($b >= $a && $b >= $c) {
    echo " $b is a largest Number";}
if ($c >= $a && $c >= $b) {
    echo " $c is a largest Number";}    
?>