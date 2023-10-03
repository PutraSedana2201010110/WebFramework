<?php
class Animal
{
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    function getName(){
        return "Aku adalah Singa!";
    }
}
$Lion = new Animal();
echo $Lion->getName();