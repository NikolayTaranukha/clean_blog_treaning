<?php

class Human
{

    public function walk(){
        return 'HOJY';
    }

    public function minus($a,$b){
        return $a - $b;
    }

    public function stoyak(){
        return 'vstal';
    }
}

$obj = new Human(); //создали обьект
$r = $obj->minus(20, 5); // оюратились к методу
echo 'Результат вічитания: '.$r;