<!DOCTYPE html>

<html>
<head>
<title>Php String</title>

</head>

<hr>
<body>
<?php
function reverseArray($a){
$a1=$_POST['counter'];
$ar=count($a1);
for($x=$ar-1;$x>=0;$x--){
echo $a[$x]." ";
}

}
$arr=array(1,2,3,4,5,6);
reverseArray($arr);


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="number" step="1" name="counter[]">
<input type="submit">

</form>
</body>
</html>

