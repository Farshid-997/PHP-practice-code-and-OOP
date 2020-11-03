<?php 

//parent class
abstract class animal{
public $name;
function __construct($name){
$this->name=$name;
}
abstract function getName();
}

//child class
class cat extends animal{

    function getName(){
        echo "the name of the animal is:".$this->name;
    }
}
$animal= new cat("Cat");
$animal->getName();

echo "<br>";

/// another example
/**In abstract  class abstract function can have parameter and we can not create public variables and constructor.
 * in abstract class we have to create of child class
 * also child class can have optional argument
 */
abstract class parents{
    // public $name;
    // public $color;
   abstract protected function getNames($name,$color); //we can use public or protected in abstract class
    }
    
    //child class
    class childs extends parents{
    
        function getNames($name,$color,$greet="Dear"){
            echo "the name of the animal is:" .$greet .$name;
        }
    }
    $animal= new childs;
    $animal->getNames("Alex","White");


?>