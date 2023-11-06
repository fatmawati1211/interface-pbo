<?php

include_once "Komputer.php";
include_once "Laptop.php";

$komputer= new Komputer()

echo $komputer->hidupkan();
echo "<br/>";
echo $komputer->matikan();
echo "<br/>";

$laptop = new Laptop();

echo $laptop->hidupkan();
echo "<br/>";
echo $laptop->matikan();
echo "<br/>";
?>