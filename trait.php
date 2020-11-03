<?php
trait message1{
    public function msg1(){
        echo"print the message1 ";
    }
}
trait message2{
    public function msg2(){
        echo"print the message2 ";
    }
}

class welcome{

    use message1,message2;
}

class welcome1{

    use message2;
}

$obj=new welcome();
$obj->msg1();
echo "<br>";
$obj->msg2();

echo "<br>";
$obj1=new welcome();
$obj1->msg2();


?>