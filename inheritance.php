<?php
class Student{
    public $name;
    public $age;
    protected $id;

    function __construct($name,$age,$id){
               $this->name=$name;
               $this->age=$age;
               $this->id=$id;
    }

    function getName(){
        echo "The student name is:".$this->name;

    }
    function getage(){
        echo "The student age is:".$this->age;

    }
    protected function getId(){
        echo "The student id is:".$this->id;

    }
}
class enrollStudent extends Student {
     public function getStudent(){
        
         echo "The student enroll successfully".$this->id; //protected id but call it from public thats why it is executed
         echo "<br>";
         $this->getId(); //this is protected method but called by public thats why it is executed
     }


}
$students=new enrollStudent("Farshid Ahsan",23,16301088);//constructor is public thats why we can run it from any class
$students->getage();
echo "<br>";
$students->getName();
echo "<br>";
//$students->getId();
echo "<br>";
$students->getStudent();
?>