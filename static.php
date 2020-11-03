<?php
/**Static methods can be called directly - without creating an instance of the class first
 * A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):
 * Static methods can also be called from methods in other classes. To do this, the static method should be public
 * To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected
 */

//static method can call from another class
//To do this, the static method should be public:
class greetings {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class SomeOtherClass {
    public function message() {
      greetings::welcome();
    }
  }


echo "<br>";

//another example2
//A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):
class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greeting();


  echo "<br>";

  //another example3


  class domain {
   protected static $var=66;
	protected static function getWebsiteName() {
    return "W3Schools.com";
    
	}
}

class domainW3 extends domain {
  public $websiteName;
  
	public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
     echo parent::$var;            //to call a static property from a child class we use parent keyword
	}	
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

echo "<br>";

//example4
class car{
public static $value=3.15;

public function staticvalue(){
  return self::$value;
}

}
echo car::staticvalue();
?>