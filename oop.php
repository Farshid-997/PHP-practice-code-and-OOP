<?php
/**class is the bluprint of a object */
class Fruit{
//properties 
public $name="Jackfruit";
public $color="Green";

//methods
function set_name($name){
 $this->name=$name;

}
function set_color($color){
 $this->color=$color;
}
function get_name(){
   //return $this->name;
   echo "The fruit is:". $this->name;
}
/**The $this keyword refers to the current object, and is only available inside methods
 *Inside the class (by adding a set_name() method and use $this)
Outside the class (by directly changing the property value)**/
 
function get_color(){
       //return $this->color;
      echo "The color of fruit is :" .$this->color;                                    
 }

}
$na = new Fruit(); //object is output from the blueprint we can create multiple object
$fr=new Fruit();


//name print 
$na->set_name("Apple");//first object call first method

$na->name="orange"; //we can set the value manually 

$fr->set_name("Mango"); //second object
 $na->get_name(); //firt object call second method
echo "<br>";
 $fr->get_name();// second object call second method
echo "<br>";

//color  print
$na->set_color("Red");//set the color with first object

$fr->set_color("Yellow");//set the color with second object
$na->get_color(); // get the first object color

echo "<br>";
$fr->get_color();//get the second object color



?>

