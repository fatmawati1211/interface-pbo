<?php

include_once "Komputer.php";

$perangkatelektronik = new Komputer();

echo $perangkatelektronik->hidupkan();
echo "<br/>";
echo $perangkatelektronik->matikan();
?>