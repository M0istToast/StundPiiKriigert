<?php
require "functions.php";

 $x = "kaķēni";

if (isset($x)) {
  $y = $x;
} else {
  $y = "Ups!";
}
$y = isset($x) ? $x : "Ups!";
$y = $x ?? "Ups!";
dd($x);