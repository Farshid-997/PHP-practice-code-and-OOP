<?php 
/**Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time
 * 
 * 
 */
//parent class
interface animal{

public function nameon();
}

//child class
class cat implements animal{

    function nameon(){
        echo "sound is meow";
    }
}
$animal= new cat();
$animal->nameon();

?>