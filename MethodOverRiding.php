<?php
/**method overriding means the parent calss method with same name can call at child class 
 * The final keyword can be used to prevent class inheritance or to prevent method overriding
 * * final keyword class ba method er age likhle oita amra inherit ba overriding e use korte parbo nah
 * */
class Car{
public $name;
public $brand;
public $date;


function __construct($name,$brand,$date){
  $this->name=$name;
  $this->brand=$brand;
  $this->date=$date;
}
function getName(){
    echo "The name of the car is:".$this->name;
}
function getBrand(){
    echo "The name of the car Brand is: ". $this->brand . $this->date;
}
}
class toyota extends Car{
    public $weight;
    public $color;
function __construct($weight,$color)
{
    $this->weight=$weight;
  $this->color=$color;
  }
function getName(){ 
    echo "Toyota car color is:".$this->color;
}

}
$modelcar=new Car("Bugatti","Buggatti chiron","29/10/2020");
$modelcar->getBrand();
echo "<br>";
$car=new toyota(500,"Black");
$car->getName();



?>