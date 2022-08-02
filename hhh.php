<?php
$sa="localhost";
$us="root";
$p="";
$da="RamAmol";


$a=$_POST["name"];
$b=$_POST["email"];
$ss=mysqli_connect($sa,$us,$p,$da);

$qq="INSERT INTO Field(Nae,Email) value('$a','$b')";
$aa=mysqli_query($ss,$qq);
 if(!$aa)
 {
     echo "not connect please try Again";
 }
 else{
    echo "yes is it ok";
 }
mysqli_close($ss);
?>