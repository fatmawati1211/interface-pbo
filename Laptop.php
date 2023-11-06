<?php

include_once "PerangkatElektronik.php";

class Laptop implements PerangkatElektronik{
    public function hidupkan(): void{
        echo "Laptop telah dihidupkan";
    }
    
    public function matikan(): void{
        echo "Laptop telah dimatikan";
    }
}