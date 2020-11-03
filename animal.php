<?php 
namespace animals; //this animal is also include to the animals namespace thats why we do not need to write namespace before dog and cat class
include "cat.php";
include "dog.php";
$cat=new cat();
$cat->say();

echo "<br>";
$dog=new dog();
$dog->say();



?>