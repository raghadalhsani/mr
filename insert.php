<?php

 

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
 

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"mydb");

$select="insert into mytable(name,email,subject,comment) values ('".$name."' , '".$email."', '".$subject."', '".$comment."')";

$sql=mysqli_query($con,$select);

 

print '<script type="text/javascript">';

 

print 'alert("The data is inserted correctly..")';

print '</script>';

 

mysqli_close($con);

 

?>
