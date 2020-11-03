<?/**php declare(strict_types=1);**/?>
<?session_start() ?>
<!DOCTYPE html>

<html>
<head>
<title>Php String</title>

</head>
<h2>String Data Types And Methods</h2>
<hr>
<body>

<?php 
$var="Learn With Farshid and Make your Life More Comfortable.";
echo strlen($var); //show the length of the string(with space)
echo "<br>";

echo str_word_count($var); //how many word have in a string
echo "<br>";

echo strrev($var); //reverse print of a string
echo "<br>";

echo strpos($var,"more"); //tell the position of a particular string
echo "<br>";

echo str_replace("Farshid","Dolly",$var); //replace a string with another
echo "<br>";

echo strtoupper($var); //make a string uppercase
echo "<br>";

echo strtolower($var); //make a string upper
echo "<br>";

echo rtrim($var,"."); //remove a specific character of a string

echo "<br>";

echo "<hr>";
echo "<h2>Constant</h2>";



define ("Variable","Learn Php",true);     /**constant cant be change in a script and top define a we need to parameters first one is variable where we kept the the value 
                                           and second one is what is kept to the variable.**/
                                         
                                           /**and if we say true then it become case insensitive */

echo variable; 

echo "<br>";

echo "<hr>";


echo "<h2>Operators</h2>";
/**Arithmatic ex:+,-,/ etc
 assignment ----> ex: x+=y,x-=y etc
 Comparison ----> ex:x==y x===y 
increment/decrement ---->++x,x++,--x,x--
Logical --> &&,!,||
string ----> concatanation, .=
Array -----> //same as comaparison but this is dealth with array
conditional  --->
**/

/**Comparison Operator  */
/* identical */ 
$x=5;  /**type and value must be equal then it return true */
$y=5;

var_dump($x === $y);

echo "<br>";
/**spaceship */
 
$x1=5;            /*if x<y then it returns -1 if equalthen return 0 or x>y then it return +1*/
$y1=10;

echo ($x1 <=> $y1);

echo "<br>";

/**Increment or decrement */

//preincrement

$x=10;
echo ++$x; // fist increment by one then return the value
echo "<br>";
$x1=10;
echo $x1++; //first return the value 0f x1 then increment it

echo "<br>";


/**string operators */
$txt1="Farshid";
$txt2="Ahsan";



echo $txt1.$txt2; //add the two string

echo "<br>";
$txt1.=$txt2;
echo $txt1; //txt2 value go to txt1 


echo "<br>";

/**Conditional */

/**Ternary */  //it is like if and else

/**Writing Method...... 
 * Variable=condition?Expression1:Expression2;
 * if condition True return Expression1
 * if condition False return Expression2
*/

$result=(5>1)?"Bigger":"lesser";
echo $result;

echo "<br>";
/**Null coalescing */

/**Writing Method...... 
 * Variable=Expression1??Expression2;
 *  value of variable would be expr1 if expr1 exist or not null
 * if not then the variable value is expr2.
*/
$exp1=null;
$exp2=5;
$var=$exp1??$exp2;
echo $var;



echo "<hr>";

echo "<h2>Switch Case</h2>";
/**switiching one condition to another if first condition is true then it breks down */
$var=NULL;
switch($var){
case "red":
    echo "color is red";
break;
case "green":
    echo "color is green";
    break;
case "blue":
    echo "color is blue";
break;
default:
echo "no color";
}


echo "<hr>";

echo "<h2>LOOPS</h2>";
/**4 types of loops 
 * 1.while
 * 2.do-while
 * 3.for
 * 4.for each
 */
/**While loop */
//initialize the variable then write the condition then write what will executed and increment or decrement

echo "<h4>While Loop</h4>";
$a=1;
while($a<=10){
echo "number is:$a <br>" ;
$a++;
}
echo "<br>";

/**do-while */
//first write what will be executed and increment or decrement then write the condition
echo "<h4>Do-While LOOP</h4>";
$a=5;
do {
    echo "number is $a <br>";
    $a++;
}while($a<=10);



echo "<h4>For LOOP</h4>";

/**For Loop */
for($x=1;$x<=5;$x++){
    echo "printing <br>";
}

echo "<h4>For Each LOOP</h4>";

/**for each */
/**
 * foreach ($array as $value) {
  code to be executed;
   }
 * for each array execute only on array
 * For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
**/

$names=array("A","BB","CC","DD");

foreach($names as $name){
echo "<br>";
echo $name ;
}

echo "<hr>";

echo "<h2>Break And Continue Keyword</h2>";

/**break means the condition break at that point and will not executed further */

echo "<h4>Break</h4>";
$var=10;
while($var>1){
    if($var==5){
    break;
    }
    echo "$var <br>";
    $var--;
   
}
echo "<h4>Continue</h4>";
for($a=1;$a<10;$a++){
    if ($a==5){
        continue;
    }

    echo '<br>';
    echo $a;
}
echo "<hr>";

echo "<h2>Functions</h2>";

/***Strict  method  
 * 
 * 
*/

echo "<h4>Function without strict</h4>";

function addNum(int $a,int $b){

    return $a+$b;

}

echo addNum(5,"5");
//// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

echo "<h4>Function without strict</h4>";
// declare(strict_types=1); //strict requirements
// strict called at the beginning of the script

function add_Num(int $a, int $b){
    return $a+$b;
}
echo add_Num(50,"3");

//// since strict is enabled and "5 days" is not an integer, an error will be thrown

echo "<h4>PHP Return Type Declarations</h4>";

//return float value because we set it to float
function add_Number(float $a, float $b):float{
    return $a+$b;
}
echo add_Number(50.2,3.02);

echo '<br>';
//return only int value
function sub_Numbers(float $a, float $b):int{
    return $a-$b;
}
echo sub_Numbers(50.2,3.02);

echo "<h4>Passing Arguments by Reference</h4>";


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;


echo "<hr>";

echo "<h2>Array</h2>";

//Array Traversal

$cars=array("BMW","VolVo","Toyota");
$arrlength=count($cars);
echo $arrlength;

echo "<br>";

for($i=0;$i<$arrlength;$i++){
echo $cars[$i];

echo "<br>";
}
echo "<h4> Associative Array</h4>";
$arr['Peter']=35;
$arr['John']=51;
$arr['rage']=56;
foreach($arr as $x=>$row){
echo "<br>"; 
echo "key: ". $x ." value: ".$row;
}

echo "<h4> Alternative of Associative Array</h4>";
///or we can write it this way 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";


echo "<h4> Multidimensional Array</h4>";
$cars=array(
array("Volvo",22,15),
array("BMW",24,19),
array("Toyota",33,25),
array("Hundai",10,7)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";// first one is row second one is column
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "<h4> Multidimensional Array with loop </h4>";

for($row=0;$row<4;$row++){
echo "<br>";    
echo "row number:",$row;
echo "<br>";   
for($col=0;$col<3;$col++){
echo "<br>"; 
echo $cars[$row][$col];
}
}


echo "<h4> Sorting Array</h4>";
/**sort()->sort the value to ascending order
 * asort()--->sort associative arrays to ascending order to the value
 * ksort()----> sort the associative array in ascending order, according to the key
 * rsort()---->sort the array to descending order to the value
 * arsort()--->sorts an associative array in descending order, according to the value
 * krsort()---->an associative array in descending order, according to the key
 * 
 */
$var=array("variable","Farshid","Ahsan","Roger");
sort($var);
$Clength=count($var);
for($i=0;$i<$Clength;$i++){
 echo "<br>"; 
 echo $var[$i];
}

echo "<hr>";

echo "<h2>Variable scope</h2>";
/**variable scope means the power of range of the variable it means where it can work or where it can't 
 * if  it is global then we can call anywhere from the script and if we declare in a function(not global) we can't call it to the other function.**/
 $k=10;
function Num(){
    $s=20;
    echo $s;
}

function Num1(){
    $s1=55;
    
    echo $s1;
    /**echo $k; 
     *it gives us the error because it is not global variable for identify global we have make it global**/
    
    echo "<br>";
     global $k;
    echo $k;
}

Num();
echo "<br>";
Num1();
echo "<hr>";

echo "<h2>Super Global Variable scope</h2>";
/**Super global variables are built-in variables that are always available in all scopes.
 */
echo "<h4>Global</h4>";

$x=25;
$y=75;
function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    }
 addition();
 echo $z;
 echo "<h4>Server</h4>";
 /**$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. */
 echo $_SERVER['PHP_SELF']; //show the page name
 echo "<br>";
 echo $_SERVER['SERVER_NAME'];//show the server name
 echo "<br>";
 echo $_SERVER['HTTP_HOST']; //host name now host is localhost
 echo "<br>";
 echo $_SERVER['REQUEST_METHOD'];//request method  to the browser post use update insert and edit
 echo "<br>";
 echo $_SERVER['HTTP_USER_AGENT'];//which browser which operating system we are working
 echo "<br>";
 echo $_SERVER['SCRIPT_NAME']; //which scrip we are working on
 echo "<br>";
 echo $_SERVER['REQUEST_URI'];//from which page we are requesting

 echo "<h4>Post</h4>";
 /**PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
  * $_POST is also widely used to pass variables
  * 
  */

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];//we can use $_post super variable insted of $_REQUEST.
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<h4>GET</h4>";
/**$_GET can also collect data sent in the URL.
 * 
 */


// echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

// echo "<br>";
// echo "<br>";

// echo "<hr>";
echo "<hr>";
echo "<h2>Regex</h2>";

/** syntax----> "/"--->means delimeter, i----means modifier, "aaa"--->is the pattern
 * for example---->$exp = "/w3schools/i";
 * preg_match()	---->Returns 1 if the pattern was found in the string and 0 if not
 * preg_match_all()---->Returns the number of times the pattern was found in the string, which may also be 0
 * preg_replace()---->Returns a new string where matched patterns have been replaced with another string
 */

echo "<h4>Preg Match</h4>";
 $str="The dog is barking";
 $pattern="/bar/i";
 echo preg_match($pattern,$str); // output 1
 
 echo "<h4>Preg Match All</h4>";
 $str="The dog is barking";
 $pattern="/bar/i";
 echo preg_match_all($pattern,$str);

 echo "<h4>Preg Replace</h4>";
 $str="The dog is Cute";
 $pattern="/dog/i";
 echo preg_replace($pattern,"Cat",$str);
 
 echo "<h4>Grouping</h4>";
 $str = "Apples and bananas.";
$pattern = "/pp(le){1}/i";
echo preg_match($pattern, $str); // Outputs 1

echo "<hr>";

echo "<h2>Date Function</h2>";

echo "Today is".date("m-d-y"); // show the current date month and year
echo "<br>";
date_default_timezone_set('Asia/Dhaka');//set the current timezone firstly
echo date('h:i:a');//h represent 12 hour format,i with minutes and a means am or pm

echo "<br>";

echo "Today is".date(" l");// show the week name

echo "<br>";
$d=mktime(2, 25, 54, 10, 20, 2020);//in this parameter fist one is hour,minute,second then date,month year
echo date("D-M-Y h:i:a",$d);
echo "<br>";
$d=strtotime("tomorrow"); //strtotime function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT)
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";


//next 6 days print

$startdate=strtotime("Tuesday");
$nextdate=strtotime("+6 days",$startdate);
while($startdate<$nextdate){
echo date("M d", $startdate). "<br>";
$startdate = strtotime("+1 days", $startdate);

//include and require are same if we apply something from one page to multiple page it is needed like 
//(navbar,sidebar have one page and from that page we can call it to multiple pages with require
//require function give fatal error and stop executing code but include do not stop executing code but give warning
}
echo "<hr>";

echo "<h2>File Read</h2>";


echo readfile("php.txt");

echo "<hr>";

echo "<h4>File Open</h4>";
//fopen --->open a file
$file=fopen("php.txt","r") or die("unable to open file");
$read=fread($file,filesize("php.txt"));
echo $read;
fclose($file);
//fgets--->show the first line of a file
echo "<h4>Show the first line of a file </h4>";
$myfile=fopen("php.txt","r") or die("unable to open file");
echo fgets($myfile);
fclose($myfile);

/**The feof() function checks if the "end-of-file" (EOF) has been reached.

The feof() function is useful for looping through data of unknown length. */

echo "<h4>Looping through the end of a line </h4>";
$my_file=fopen("php.txt","r") or die("unable to open file");
while(!feof($my_file)) { //if the file cant reach the last line of a file then show the first line
      echo fgets($my_file)."<br>";

}
fclose($my_file);
/**The fgetc() function is used to read a single character from a file.
 * he example below reads the "php.txt" file character by character, until end-of-file is reached:
 */
echo "<h4>fget() function--->print a single char until end of a sentence </h4>";
$my_file1=fopen("php.txt","r") or die("unable to open file");
while(!feof($my_file1)) { //if the file cant reach the last line of a file then show the first line
      echo fgetc($my_file1)."<br>";

}
fclose($my_file1);
echo "<hr>";

echo "<h2>Session</h2>";
$_SESSION['email']="arnob.farshid@gmail.com";
$_SESSION['password']="12345";
echo $_SESSION['email']."<br>";
//session_unset();
echo $_SESSION['password'];
 
echo "<hr>";

echo "<h2>Call Back Function</h2>";
/**A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
Any existing function can be used as a callback function. To use a function as a callback function,
 pass a string containing the name of the function as the argument of another function
 * 
 * array_map()-->The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function
 */
  function cat_says(){
      echo " Dog Sucks";
  }
  
  function animal_says($animal_type,$animal_function){
       echo  $animal_type. " Says";
      call_user_func($animal_function); //this function take a string as argument convert it as function then execute it.

  }
  animal_says("Cat","cat_says"); //call back function

  echo "<br>";
  // another example1
   function cat_eat($eating){
       echo $eating ;
   }
   function animal_talk($animal_type,$animal_function,$eating)
   {
   echo $animal_type." eats";
   call_user_func($animal_function,$eating);
  }
  animal_talk("Cat","cat_eat", " milk");//here call the cat eat function and its argument

  echo "<br>";
 // another example2

 function my_callback($item){
     return strlen($item);
 }
 $strings=['apple','orange','banana'];
 $lengths=array_map("my_callback",$strings);
 print_r($lengths); //output will be which string length what

 echo "<br>";
 // another example3

 function add_numbers($num){
     echo $num+1;
 }

 function print_num($strings,$numbers){
     echo $strings;
 }

 print_num("The sum of sumber is :", "add_number"); //callback function
 add_numbers(5);


 echo "<hr>";

 echo "<h2>JSON</h2>";
$jobj='{"Peter":35,"Ashley":40,"Young":40}';

var_dump(json_decode($jobj));
echo "<br>";
//if only want the values
$jsobject='{"Peter":35,"Ashley":40,"Young":40}';
$obj=json_decode($jsobject);
echo $obj->Peter; echo "<br>";
echo $obj->Ashley; echo "<br>";
echo $obj->Young;  



?>

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<br>
<a href="string.php?subject=PHP&web=W3schools.com">Test $GET</a> -->

</body>

</html>