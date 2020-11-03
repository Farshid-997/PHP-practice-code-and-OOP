<?php 
class animal{

   public $name;
   public $color;
   public $food;
 /**A constructor allows you to initialize an object's properties upon creation of the object.
  * If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
  */

   function __construct($name,$color,$food){
     $this->name=$name;
     $this->color=$color;
     $this->food=$food;

   }

//    function set_name($name){
//       return $this->name;
//    }
//    function set_color($color){
//     return $this->name;
//  }
//  function set_food($food){
//       return $this->food;
//  }
function get_name(){

    echo "animal name is:". $this->name;
}

function get_color(){
    echo "animal color is:".$this->color;
}
function get_food(){
    if($this->name=="cow"){
     echo  $this->name."food is:".$this->food;

    }
    elseif($this->name=="Tiger"){
        echo  $this->name." food is:".$this->food;
    }
    else{
        echo "food is ". $this->food;
    }
 }
}
$ani=new animal("Cow","Black","Grass");
$animal=new animal("Tiger","Yellow","Meat");
// $ani->set_name("cow","black","grass");
 $ani->get_name();
echo "<br>";
$ani->get_color();
echo "<br>";
$ani->get_food();

echo "<br>";
$animal->get_food();







?>